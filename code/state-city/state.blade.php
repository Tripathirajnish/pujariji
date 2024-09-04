@extends('admin.layout.layouts')
@section('content')
@section('title','State List')

{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container m-0 p-0">
        <div class="card m-0 p-0">
            <div class="card-header d-flex justify-content-between">
            <div class="fw-bold"> State List</div>
            <div class="fw-bold"><button class="btn btn-primary add"  data-bs-toggle="modal" data-bs-target="#exampleModal">Add New State</button></div>

            </div>
            <div class="card-body table-responsive">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <table class="table table-sm small table-hover" id="dataTable">
                    <thead>
                        <tr class="small">
                            <th>#</th>
                            <th>State</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($states as $state)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $state->state_hindi }}</td>
                            <td>{{ $state->state }}</td>
                            <td>
                                <a href="#" class="updateStatustoggle" data-url="{{ url('update_state') }}" data-id="{{ $state->id }}">
                                    @if($state->status=='0')
                                    <i class="fa fa-eye text-success"></i>
                                    @else
                                    <i class="fa fa-eye-slash text-danger"></i>
                                    @endif
                                </a>
                                <span class="mx-2">||</span>
                                <i class="fa fa-trash text-danger delete_this" data-id="{{ $state->id }}" data-url="{{ url('delete_state') }}"></i>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{{-- !Content --}}
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="state_modal">Add New State</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <form action="{{ url('save_state_post') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="state">Select State</label>
                    <select name="state_name" class="form-control" id="">
                        <option value="" selected disabled>Select State</option>
                        @foreach ($select_states as $state)
                            <option value="{{ $state->state_title }}">{{ $state->state_title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="state">State Name(Hindi)</label>
                    <input type="text" name="state_name_hindi" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection
