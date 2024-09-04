@extends('admin.layout.layouts')
@section('title','Shipping/Delivery Charge')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
    table tr th{
        color: #ffffff !important;
    }
</style>
<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Shippinng/Delivery Charge</h5>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-body d-flex justify-content-center m-3 mb-5">
            <div class="card" style="width: 70%;">
                <form action="{{ url('update-delivery-charge') }}" method="post">
                @csrf
                <div class="card-body">
                    <p class="card-text">Shipping / Delivery Charge</p>
                  <h5 class="card-title"><input type="text" name="delivery_charge" class="form-control numericInput" placeholder="Delivery Charge" value={{ $data->shipping_price??0 }}></h5>
                  <button type="submit" class="btn btn-primary float-end" >Update Charge</button>
                </div>
            </form>
              </div>
        </div>
    </div>
</div>



@endsection


