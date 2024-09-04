@extends('admin.layout.layouts')
@section('title','Pujari Ji || Extra Payment History')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Extra Payment History</h5>
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
                    <table class="table table-striped table-hover small" id="dataTable">
                        <thead>
                            <tr class="text-nowrap small">
                                <th>#</th>
                                <th>Payment ID</th>
                                <th>Yajman</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Transection ID</th>
                                <th>Posted On</th>
                                @if(session('type')==base64_encode('master_admin'))
                                <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($list as $value)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $value->pay_id }}</td>
                                    <td>
                                        <p class="m-0 p-0 d-flex justify-content-between small">
                                            <span class="m-0 p-0"><img src="{{ jajmaan_image($value->user_id) }}" alt="" class="rounded-circle " height="60px"></span>
                                            <span class="m-0 p-0">
                                                {{ jajmaan_name($value->user_id) }}<br>
                                                {{ jajmaan_number($value->user_id) }}<br>
                                                {{ $value->user_id }}
                                            </span>
                                        </p>
                                    </td>
                                    <td>{{ $value->title }}</td>
                                    <td>{{ $value->description }}</td>
                                    <td>₹{{ $value->amount }}</td>
                                    <td>{{ $value->transaction_id }}</td>
                                    <td>{{ date('d-m-Y',strtotime($value->created_at)) }}</td>
                                    @if(session('type')==base64_encode('master_admin'))
                                    <td>
                                        <button class="badge bg-danger border-0 delete_this" data-id="{{ $value->pay_id }}" data-url="{{ url('delete_payment') }}">Delete Permanently</button>
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



@endsection
