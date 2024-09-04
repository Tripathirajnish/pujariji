@extends('admin.layout.layouts')
@section('title','Pooja Category')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Pooja Category</h5>
            @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
            <a class="btn btn-primary text-white add_new" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Add New Category</a>
            @endif
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
            <table class="table table-sm table-hover" id="dataTable">
                <thead>
                    <tr class="small bg-secondary text-white">
                        <td>SN</td>
                        <td>Image</td>
                        <td>Name</td>
                        <td>Name(Hindi)</td>
                        @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                        <td>Action</td>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $value)
                        <tr>
                            <td>{{ $loop->iteration }} </td>
                            <td><img src="{{ $value->cat_image }}" class="rounded-circle" width="100" style="max-height: 100px;" alt=""></td>
                            <td>{{ $value->cat_name }}</td>
                            <td>{{ $value->cat_name_hindi }}</td>
                            @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                            <td>
                                <a href="#" class="updateStatustoggle" data-url="{{ url('update-category') }}" data-id="{{ $value->cat_id }}">
                                    @if($value->status=='0')
                                    <i class="fa fa-eye text-success"></i>
                                    @else
                                    <i class="fa fa-eye-slash text-danger"></i>
                                    @endif
                                </a>
                                <span class="mx-2">||</span>
                                <a href="javascript:void(0)" class="edit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $value->cat_id }}"><i class="fa fa-edit text-info"></i></a>
                                <span class="mx-2">||</span>
                                <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->cat_id }}" data-url="{{ url('delete-category') }}"></i>
                            </td>
                            @endif
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
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <form action="{{ url('save-category') }}" method="post" id="form_id" enctype="multipart/form-data">
        <div class="modal-body">
            @csrf
            <input type="hidden" name="category_id">
            <div class="form-group mb-2">
                <label for="name">Category Name</label>
                <input type="text" name="category_name" value="{{ old('category_name') }}" class="form-control" placeholder="Enter category Name" required>
            </div>
            <div class="form-group mb-2">
                <label for="name">Category Name Hinid</label>
                <input type="text" name="category_name_hindi" value="{{ old('category_name_hindi') }}" class="form-control" placeholder="Enter category Name in Hindi" required>
            </div>
            <div class="form-group mb-2">
                <label for="name">category Image</label>
                <input type="file" name="category_image" value="{{ old('category_image') }}" class="form-control"  id="imageInput">
                <img class="p-1" height="150" id="imagePreview" alt="">
                <img class="p-1" height="150" id="category_image_show" name="category_image_show" alt="">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>



  <script>
    $('.add_new').click(function(){
        $("#form_id")[0].reset();
        $('#exampleModalLabel').empty().text('Add New category');
    })
  </script>

  <script>
    $('.edit').click(function(){
        $("#form_id")[0].reset();
        $('#exampleModalLabel').empty().text('Edit category');
        var id = $(this).data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ url('get-category') }}",
            data: {data:id},
            success: function (response) {
                console.log(response);
                $("input[name='category_id']").val(response.cat_id);
                $("input[name='category_name']").val(response.cat_name);
                $("input[name='category_name_hindi']").val(response.cat_name_hindi);
                $("img[name='category_image_show']").attr('src', response.cat_image);
            }
        });
    })
  </script>
@endsection

