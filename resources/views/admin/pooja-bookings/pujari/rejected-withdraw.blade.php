@extends('admin.layout.layouts')
@section('title','Rejected Withdraw Request')
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
                <h5 class="card-title p-3 pb-0 mb-1">Pujari Ji Rejected Withdraw Request</h5>
             </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>id</th>
                                <th>Withdraw ID</th>
                                <th>PujariJi</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Bank Detail</th>
                                <th>Rejected Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->withdra_id }}</td>
                                    <td>
                                        <div class="d-flex justify-space-between">
                                            <div><img src="{{ pujari_image($item->pujari_id) }}" class="img-responsive rounded-circle" width="50" height="50" alt=""></div>
                                            <div class="pt-2 ms-1">
                                                <a href="{{ url('pujariji-details',base64_encode($item->pujari_id)) }}" class="text-nowrap details" title="View More">{{ pujari_name($item->pujari_id) }}</a><br>
                                                <span class="text-nowrap">
                                                    <small class="small">{{ $item->pujari_id }}</small>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ date('d-F-Y',strtotime($item->date)) }}</td>
                                    <td>₹{{ $item->withdraw_amount }}</td>
                                    <td>
                                        <div class="m-0 p-0">
                                            <span><label class="fw-bold"">Ac Holder : </label>{{ $item->ac_holder }}</span><br>
                                            <span><label class="fw-bold"">Ac Type : </label>{{ $item->ac_type }}</span><br>
                                            <span><label class="fw-bold"">Ac Number : </label>{{ $item->ac_number }}</span><br>
                                            <span><label class="fw-bold"">IFSC : </label>{{ $item->ac_number }}</span><br>
                                        </div>
                                    </td>
                                    <td>
                                        {{ date('d-M-Y',strtotime($item->updated_at)) }}
                                    </td>
                                    <td>
                                        <i class="fa fa-times text-danger fs-4" title="Reject"></i>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
