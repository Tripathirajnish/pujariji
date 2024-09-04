@extends('admin.layout.layouts')
@section('title','Pooja Material')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Pooja Material</h5>
            @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
            <a class="btn btn-primary text-white add_new" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Add New Material</a>
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
                        <td>Pooja</td>
                        <td>Material</td>
                        <td>Name(Hindi)</td>
                        @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                        <td>Action</td>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $value)
                        <tr>
                            <td>{{ $loop->iteration }} </td>
                            <td><img src="{{ $value->image }}" class="rounded-circle" width="100" style="max-height: 100px;" alt=""></td>
                            <td>{{ pooja_name($value->pooja_id)['eng_name'] }}</td>
                            <td>{{ $value->material_name }}</td>
                            <td>{{ $value->material_name_hindi }}</td>
                            @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                            <td>
                                <a href="#" class="updateStatustoggle" data-url="{{ url('update-material') }}" data-id="{{ $value->material_id }}">
                                    @if($value->status=='0')
                                    <i class="fa fa-eye text-success"></i>
                                    @else
                                    <i class="fa fa-eye-slash text-danger"></i>
                                    @endif
                                </a>
                                <span class="mx-2">||</span>
                                <a href="javascript:void(0)" class="edit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $value->material_id }}"><i class="fa fa-edit text-info"></i></a>
                                <span class="mx-2">||</span>
                                <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->material_id }}" data-url="{{ url('delete-material') }}"></i>
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
        <form action="{{ url('save-material') }}" method="post" id="form_id" enctype="multipart/form-data">
        <div class="modal-body">
            @csrf
            <input type="hidden" name="material_id">
            <div class="form-group mb-2">
                <label for="name">Pooja</label>
                <select name="pooja" class="form-control" id="pooja" required>
                    <option value="" selected disabled>--Select Pooja--</option>
                    @foreach ($pooja as $value)
                        <option value="{{ $value->pooja_id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="name">Material Name</label>
                <input type="text" name="material_name" value="{{ old('material_name') }}" class="form-control" placeholder="Enter Material Name" required>
            </div>
            <div class="form-group mb-2">
                <label for="name">Material Name Hinid</label>
                <input type="text" name="material_name_hindi" value="{{ old('material_name_hindi') }}" class="form-control" placeholder="Enter Material Name in Hindi" required>
            </div>
            <div class="form-group mb-2">
                <label for="name">Material Image</label>
                <input type="file" name="material_image" value="{{ old('material_image') }}" class="form-control"  id="imageInput">
                <img class="p-1" style="max-height: 150px;" id="imagePreview" alt="">
                <img class="p-1" style="max-height: 150px;" id="material_image_show" name="material_image_show" alt="">
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
        $('#exampleModalLabel').empty().text('Add New Material');
    })
  </script>

  <script>
    $('.edit').click(function(){
        $("#form_id")[0].reset();
        $('#exampleModalLabel').empty().text('Edit Material');
        var id = $(this).data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ url('get-material') }}",
            data: {data:id},
            success: function (response) {
                console.log(response);
                $("input[name='material_id']").val(response.material_id);
                $("select[name='pooja']").val(response.pooja_id);
                $("input[name='material_name']").val(response.material_name);
                $("input[name='material_name_hindi']").val(response.material_name_hindi);
                $("img[name='material_image_show']").attr('src', response.image);
            }
        });
    })
  </script>
@endsection

