@extends('admin.layout.layouts')
@section('title','Shipping Cities')
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
            <h5 class="m-0">Shippinng Cities</h5>
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Add New City</a>
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

        <div class="card-body table-responsive">
            <table class="table table-sm table-hover small" id="dataTable">
                <thead>
                    <tr class="small bg-dark">
                        <th>SN</th>
                        <th>City</th>
                        <th></th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $value)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->city_english }}</td>
                            <td>{{ $value->city_hindi }}</td>
                            <td>
                                <a href="#" class="updateStatustoggle" data-url="{{ url('update_cities') }}" data-id="{{ $value->city_id }}">
                                    @if($value->status=='0')
                                    <i class="fa fa-eye text-success"></i>
                                    @else
                                    <i class="fa fa-eye-slash text-danger"></i>
                                    @endif
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New City</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <form action="{{ url('add_new_city_post') }}" method="POST">
        @csrf
            <div class="modal-body">
            <div class="form-group mb-3">
                <label for="">Select City</label>
                <select name="city_english" class="form-control">
                    <option value="" selected disabled>--Select City--</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->name }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">City Hindi</label>
                <input type="text" class="form-control" name="city_hindi" placeholder="Enter City Name in Hindi">
            </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save City</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection


