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

{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Astrologer Rejected Withdraw Request</h5>
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
                                <th>Action</th>
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
                                            <span><label class="fw-bold"">Ac Type : </label>{{ $item->ac_type }}</span><br>
                                            <span><label class="fw-bold"">Ac Number : </label>{{ $item->ac_number }}</span><br>
                                            <span><label class="fw-bold"">IFSC : </label>{{ $item->ac_number }}</span><br>
                                        </div>
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
