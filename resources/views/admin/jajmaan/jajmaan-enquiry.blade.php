@extends('admin.layout.layouts')
@section('title','Pooja Enquery List')
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
                <h5 class="card-title p-3 pb-0 mb-1">Latest Pooja Enquiries</h5>
                <div class="bg-light p-1">
                   
                 </div>
             </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>#</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Packaage</th>
                                <th>PujaName</th>
                                <th>Booking</th>
                                <th>Notes</th>
                                <th>CreatedTime</th>
                                <th>UpdatedTime</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$data->name}}</td>
                                <td>
                                    <a href="tel:{{ $data->phone }}" class="text-nowrap"><i class="bx bx-phone text-primary"></i> {{ $data->phone }}</a>
                                </td>
                                <td>{{ virtual_package_name($data->package_id)['eng_name'] }}</td>
                                <td>{{ virtual_pooja_name($data->pooja_id)['eng_name'] }}</td>
                                <td>@if($data->payment_id) Yes @else No @endif</td>
                                <td>{{ $data->note }}</td>
                                <td>{{ date('d-m-Y h:i:s A', strtotime($data->created_at)) }}</td>
                                <td>{{ date('d-m-Y h:i:s A', strtotime($data->updated_at)) }}</td>

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
