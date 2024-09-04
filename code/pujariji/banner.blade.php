@extends('admin.layout.layouts')
@section('title','Pujari Ji || Banner List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Banner List</h5>
                @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('master_admin'))
                <button class="btn btn-primary p-2 me-4 mt-3 add" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i>Add Banner</button>
                @endif
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
                                <th>Image</th>
                                <th>Screen</th>
                                <th>Status</th>
                                @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('master_admin'))
                                <th>Delete</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($list as $value)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ $value->image }}" class="rounded" height="100px"></td>
                                <td>{{ $value->screen=='0'?'Yajman':($value->screen=='1'?'Astrologer':($value->screen=='2'?'Kathavachak':'PujariJi')) }}</td>
                                <td>
                                    <a href="#" class="updateStatustoggle" data-url="{{ url('uppdate_banner') }}" data-id="{{ $value->id }}">
                                        @if($value->status=='0')
                                        <i class="fa fa-eye text-success"></i>
                                        @else
                                        <i class="fa fa-eye-slash text-danger"></i>
                                        @endif
                                    </a>
                                </td>
                                @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('master_admin'))
                                <td><button class="badge bg-danger border-0 delete_this" data-id="{{ $value->id }}" data-url="{{ url('delete_banner') }}">Delete Permanently</button></td>
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


  <!-- Add Astrology -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modelTitle"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <form action="{{ url('save_banner') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="id" id="id">
            <input type="hidden" name="service_provider" id="id" value="0">
            <div class="modal-body">

                <div class="input-group mb-3">
                    <span class="input-group-text"> Screen </span>
                    <select name="screen_id" id="" class="form-control">
                        <option value="" disabled selected>--Select Screen --</option>
                        <option value="4">All</option>
                        <option value="0">Yajman</option>
                        <option value="1">Astrologer</option>
                        <option value="2">Kathavachak</option>
                        <option value="3">Pujari</option>
                    </select>
                </div>

                <div class="input-group">
                    <span class="input-group-text"> Banner Images </span>
                    <input type="file" class="form-control" name="banner_images[]" accept="images/*" multiple>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>



@endsection
