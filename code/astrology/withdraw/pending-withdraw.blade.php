@extends('admin.layout.layouts')
@section('title','Pending Withdraw Request')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    table th {
        font-size: 11px !important;
        padding: 1 !important;
    }

    table td {
        font-size: 11px !important;
        padding: 1 !important;
    }

</style>
<script>
    // $(document).ready( function () {
    //     $('#my_dataTable').DataTable({
    //         processing: true,
    //         serverSide: true,
    //         ajax: "{!! route('get.astro') !!}",
    //         columns: [
    //             { data: 'id', name: 'id'},
    //             { data: 'Astrologer', name: 'Astrologer'},
    //             { data: 'phone', name: 'phone'},
    //             { data: 'astro_city', name: 'astro_city'},
    //             { data: 'astro_state', name: 'astro_state'},
    //             { data: 'action', name: 'action'},
    //         ]
    //     });
    // } );
</script>

{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Astrologer Pending Withdraw Request</h5>
             </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>id</th>
                                <th>Withdraw ID</th>
                                <th>Astrologer</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Bank Detail</th>
                                @if(session('type')==base64_encode('master_admin'))
                                <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->withdraw_id }}</td>
                                    <td>
                                        <div class="d-flex justify-space-between">
                                            <div><img src="{{ astro_image($item->astro_id) }}" class="img-responsive rounded-circle" width="50" height="50" alt=""></div>
                                            <div class="pt-2 ms-1">
                                                <a href="{{ url('astrologer-details',base64_encode($item->astro_id)) }}" class="text-nowrap details" title="View More">{{ astro_name($item->astro_id) }}</a><br>
                                                <span class="text-nowrap">
                                                    <small class="small">{{ $item->astro_id }}</small>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ date('d-F-Y',strtotime($item->withdraw_date)) }}</td>
                                    <td>₹{{ $item->amount }}</td>
                                    <td>
                                        <div class="m-0 p-0">
                                            <span><label class="fw-bold"">Ac Holder : </label>{{ $item->ac_holder }}</span><br>
                                            <span><label class="fw-bold"">Ac Type : </label>{{ $item->type }}</span><br>
                                            <span><label class="fw-bold"">Ac Number : </label>{{ $item->ac_number }}</span><br>
                                            <span><label class="fw-bold"">IFSC : </label>{{ $item->ac_number }}</span><br>
                                        </div>
                                    </td>
                                    @if(session('type')==base64_encode('master_admin'))
                                    <td>
                                        <a href="javascript:void(0);"><i data-id="{{ $item->withdraw_id }}" class="fa fa-circle-check text-success fs-4 verify_reject" title="Verify"></i></a>
                                        <span class="mx-2 fs-4">||</span>
                                        <a href="javascript:void(0);"><i data-id="{{ $item->withdraw_id }}" class="fa fa-times text-danger fs-4 verify_reject" title="Reject"></i></a>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
 $('.verify_reject').click(function () {
    var id = $(this).attr("data-id");
    var ths = $(this);

    Swal.fire({
        title: "<br>Click on Verify/Reject button to Make or Reject Payment?<br><br>",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Verify",
        denyButtonText: `Reject`
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Please Wait...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();                }
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ url('astro-verify_withdraw') }}",
                data: { data: id },
                success: function (response) {
                    Swal.close(); // Close the loading state
                    ths.closest('tr').remove();
                    Swal.fire("Verified Successfully!", "", "success");
                },
                error: function () {
                    // Handle error if needed
                    Swal.close(); // Close the loading state
                }
            });
        } else if (result.isDenied) {
            Swal.fire({
                title: 'Please Wait...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();                }
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ url('astro-reject_withdraw') }}",
                data: { data: id },
                success: function (response) {
                    Swal.close();
                    Swal.fire("Verification Rejected", "", "success");
                    ths.closest('tr').remove();
                },
                error: function () {
                    // Handle error if needed
                    Swal.close(); // Close the loading state
                }
            });
        } else {
            // Handle the case where neither "Verify" nor "Reject" is clicked
            Swal.close(); // Close the loading state if applicable
        }
    });
});

</script>

@endsection
