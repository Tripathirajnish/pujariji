@extends('admin.layout.layouts')
@section('title','Pending PujariJi List')
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
@php
    $states = DB::table('pujari_state')->where('status','0')->orderBy('state','asc')->get();
    $cities = DB::table('pujari_city')->where('status','0')->orderBy('city','asc')->get();
@endphp

{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Pending PujariJi List</h5>
                {{-- <div class="bg-light p-1">
                    <label class="fw-bold"> Apply Filters : </label>
                    <form action="{{ url('jajmaan_filter') }}" method="GET" class="d-inline">
                     <select name="state" class="form-control-sm" id="state">
                         <option value="" disabled selected>State Filter</option>
                         @foreach ($states as $item)
                             <option value="{{ $item->state }}" @isset($state) @if($state==$item->state) selected @endif @endisset>{{ $item->state }}({{ $item->state_hindi }})</option>
                         @endforeach
                     </select>
                     <select name="city" class="form-control-sm" id="city" onchange="this.form.submit()">
                         <option value="" disabled selected>City Filter</option>
                         @foreach ($cities as $city)
                             <option value="{{ $city->city }}" @isset($filter_city) @if($filter_city==$city->city) selected @endif @endisset>{{ $city->city }}({{ $city->city_hindi }})</option>
                         @endforeach
                     </select>
                     </form>
                     <button type="button" class="btn btn-dark btn-sm" onclick="window.location='{{ url('jajmaan') }}'">Clear Filters</button>
                 </div> --}}
             </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>id</th>
                                <th>PujariJi</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>State</th>
                                @if(session('type')==base64_encode('3') || session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                                <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex justify-space-between">
                                            <div><img src="{{ $item->pujari_image }}" class="img-responsive rounded-circle" width="50" height="50" alt=""></div>
                                            <div class="pt-2 ms-1">
                                                <a href="{{ url('pujariji-details',base64_encode($item->pujari_id)) }}" class="text-nowrap details" title="View More">{{ $item->name }} {{ $item->surname }}</a><br>
                                                <span class="text-nowrap">
                                                    <small class="small">{{ $item->pujari_id }}</small>
                                                    @if($item->gender=='0')
                                                    <small><i class="bx bx-male"></i></small>
                                                    @elseif($item->gender=='1')
                                                    <small><i class="bx bx-female"></i></small>
                                                    @else
                                                    <small><i class="fa fa-transgender"></i></small>
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="tel:{{ $item->phone_number }}" class="text-nowrap"><i class="bx bx-phone text-primary"></i> {{ $item->phone_number }}</a><br>
                                        <a href="https://wa.me/+91{{ $item->whatsapp_number }}" class="text-nowrap"><i class="fa fa-whatsapp text-success me-2 fs-5"></i> {{ $item->whatsapp_number }}</a>
                                    </td>
                                    <td>{{ $item->city }}</td>
                                    <td>{{ $item->state }}</td>
                                    @if(session('type')==base64_encode('3') || session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                                    <td>
                                        <a href="#" class="verify_reject" data-id="{{ $item->pujari_id }}"><span class="badge bg-success">Verify</span></a>
                                        <span class="mx-2">||</span>
                                        <a href="#" class="verify_reject" data-id="{{ $item->pujari_id }}"><span class="badge bg-danger">Reject</span></a>
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


// Verify
 $('.verify_reject').click(function(){
    var id = $(this).attr("data-id");
    var ths = $(this);
    Swal.fire({
            title: "<br>Do you want to Verify/Reject Pujari Ji Request?<br><br>",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Verify",
            denyButtonText: `Reject`
        }).then((result) => {
        if (result.isConfirmed) {
            $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
            $.ajax({
                type: "POST",
                url: "{{ url('verify_vendor') }}",
                data: {data:id},
                success: function (response) {
                    // toastr.success('Verified Successfully');
                    ths.closest('tr').remove();
                    Swal.fire("Verified Successfully!", "", "success");
                }
            });
        } else if (result.isDenied) {
            $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
            $.ajax({
                type: "POST",
                url: "{{ url('reject_vendor') }}",
                data: {data:id},
                success: function (response) {
                    // toastr.success('Rejected Successfully');
                    Swal.fire("Verification Rejected", "", "info");
                    ths.closest('tr').remove();
                }
            });
        }
    });
 });


// Verify
//  $('.reject').click(function(){
//     var id = $(this).attr("data-id");
//     var ths = $(this);
//     $.ajax({
//         type: "POST",
//         url: "{{ url('reject_vendor') }}",
//         data: {data:id},
//         success: function (response) {
//             toastr.success('Rejected Successfully');
//             ths.closest('tr').remove();
//         }
//     });
//  });
</script>
@endsection
