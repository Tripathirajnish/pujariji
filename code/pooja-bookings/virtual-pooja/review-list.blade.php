@extends('admin.layout.layouts')
@section('title','Lastest Pooja Reviews')
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
                <h5 class="card-title p-3 pb-0 mb-1">Latest Pooja Reviews</h5>
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
                                <th>PujaName</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Attachment</th>
                                <th>CreatedTime</th>
                                <th>UpdatedTime</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$data->name}}</td>
                                <td>{{ virtual_pooja_name($data->pooja_id)['eng_name'] }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->description }}</td>
                                <td><img src="{{ $data->attachment }}" width="100" > </td>
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
