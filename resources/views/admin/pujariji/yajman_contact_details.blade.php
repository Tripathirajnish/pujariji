@extends('admin.layout.layouts')
@section('title','Pujari Ji || Contact Number')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Yajman Contact Number</h5>
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
                                <th>Name</th>
                                <th>Number</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $value)
                            <tr>
                                <td>{{ $loop->iteration }}</td>5
                                <td>{{ $value->name.' '.$value->surname }}</td>
                                <td><a href="tel:+91{{ $value->phone }}">+91{{ $value->phone }}</a></td>
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
