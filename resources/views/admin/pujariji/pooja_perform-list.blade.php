@extends('admin.layout.layouts')
@section('title','Pujari Ji || Pooja Perform List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Pooja Perform List</h5>
                <button class="btn btn-primary p-2 me-4 mt-3 add" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i>Add New Pooja Perform</button>
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
                                {{-- <th>Image</th> --}}
                                <th>Pooja Perform</th>
                                <th>Description</th>
                                <th>Added On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($list as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- <td><img src="{{ $data->image }}" class="rounded-circle" width="80px" height="80px"></td> --}}
                                <td>{{ $data->service_name }}</td>
                                <td><a href="javascript:void(0)" class="view_desc" data-id="{{ $data->service_id }}" data-bs-toggle="modal" data-bs-target="#exampleModal2">View</a></td>
                                <td>{{ date('d-F-Y',strtotime($data->created_at)) }}</td>
                                <td>
                                    <a href="#" class="updateStatustoggle" data-url="{{ url('update_types') }}" data-id="{{ $data->service_id }}">
                                        @if($data->status=='0')
                                        <i class="fa fa-eye text-success"></i>
                                        @else
                                        <i class="fa fa-eye-slash text-danger"></i>
                                        @endif
                                    </a>
                                    <span class="mx-2">||</span>
                                    <i class="fa fa-edit text-info edit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $data->service_id }}"></i>
                                    <span class="mx-2">||</span>
                                    <i class="fa fa-trash text-danger delete_this" data-id="{{ $data->service_id }}" data-url="{{ url('delete_types') }}"></i>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modelTitle"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <form action="{{ url('save_types') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="id" id="id">
            <input type="hidden" name="service_provider" id="id" value="2">
            <div class="modal-body">
                {{-- <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Image</label>
                    <input type="file" class="form-control" id="inputGroupFile01" name="image">
                    <span id="perview"></span>
                    <span id="image"></span>
                </div> --}}

                <div class="input-group mb-3">
                    <span class="input-group-text"> Pooja </span>
                    <input type="text" class="form-control" id="service_name" name="service_name">
                </div>

                <div class="input-group">
                    <span class="input-group-text"> Description </span>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>




  <!-- Add Pooja -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Pooja Description</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
            <div class="card-body">
                <div class="form-group mb-3">
                    <textarea class="form-control" rows="4" cols="20" id="description2" name="description"></textarea>
                </div>
            </div>
      </div>
    </div>
  </div>


<script>
    $('.add').click(function(){
        $('form')[0].reset();
        $('#image').empty();
        $('#modelTitle').text('Add Pooja');
    })

    $('.edit').click(function(){
        $('form')[0].reset();
        $('#image').empty();
        $('#modelTitle').text('Edit Pooja');
        var id = $(this).data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ url('edit_data_types') }}",
            data: {data:id},
            success: function (response) {
                $('#id').val(response.service_id);
                $('#service_name').val(response.service_name);
                $('#description').val(response.description);
            }
        });
    });


    $('.view_desc').click(function(){
        $('#description').empty();
        var id = $(this).data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ url('edit_data_types') }}",
            data: {data:id},
            success: function (response) {
                $('#description2').val(response.description);
            }
        });
    })
</script>
@endsection
