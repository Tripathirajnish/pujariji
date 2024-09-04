@extends('admin.layout.layouts')
@section('title','Pujari Ji || Queries List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Raised Queries List</h5>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>#</th>
                                <th>Query ID</th>
                                <th>Raised By</th>
                                <th>Type</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Added On</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $value)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->review_id }}</td>
                                <td>{{ $value->type=='0'?'Kathavachak Ji':($value->type=='1'?'Yajman':($value->type=='2'?'Astrologer':'Pujari Ji')) }}</td>
                                <td>
                                    <p class="m-0 p-0">
                                        <span class="fw-bold">{{ ucwords($value->name) }}</span><br>
                                        <small class="me-2 text-muted small">{{ $value->review_by }}</sma><br>
                                        <a href="tel:{{ $value->mobile }}" class="small">{{ $value->mobile }}</sma>
                                    </p>
                                </td>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->description }}</td>
                                <td>{{ date('d-F-Y',strtotime($value->date)) }}</td>
                                <td>
                                    <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->review_id }}" data-url="{{ url('delete_app_review') }}"></i>
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
