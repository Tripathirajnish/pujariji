@extends('admin.layout.layouts')
@section('title','Package List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Pooja Package List</h5>
            <a href="{{ url('temple-add-new-package') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Package</a>
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
                        <td>Package</td>
                        <td>Pooja</td>
                        <td>Price</td>
                        <td>Procedure</td>
                        <td>Description</td>
                        <td>Inclusions</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $value)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="small">{{ $value->name }} <br>{{ $value->name_hindi }}</td>
                            <td class="small">{{ $value->pooja }}<br> {{ $value->pooja_hindi }}</td>
                            <td>{{ $value->price }}</td>
                            <td><a href="javacript:void(0)" class="view_proceducer" data-id="{{ $value->package_id }}" data-bs-toggle="modal" data-bs-target="#exampleModal">View</a></td>
                            <td><a href="javacript:void(0)" class="view_description" data-id="{{ $value->package_id }}" data-bs-toggle="modal" data-bs-target="#exampleModal">View</a></td>
                            <td>{{ $value->inclusion }}</td>
                            <td>
                                <a href="#" class="updateStatustoggle" data-url="{{ url('temple-update-package') }}" data-id="{{ $value->package_id }}">
                                    @if($value->status=='0')
                                    <i class="fa fa-eye text-success"></i>
                                    @else
                                    <i class="fa fa-eye-slash text-danger"></i>
                                    @endif
                                </a>
                                <span class="mx-2">||</span>
                                <a href="{{ url('temple-edit-package',base64_encode($value->package_id)) }}" class=""><i class="fa fa-edit text-info"></i></a>
                                <span class="mx-2">||</span>
                                <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->package_id }}" data-url="{{ url('temple-delete-package') }}"></i>
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
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body" id="filed_deatils">
            <input type="text" id="editor">
            <input type="text" id="editor1">
        </div>
      </div>
    </div>
  </div>

<script>

    $('.view_proceducer').click(function(){
        var id = $(this).data('id');
        $('#exampleModalLabel').empty();
        $('#filed_deatils').empty();
        $('#filed_deatils').append('<input type="text" id="editor">');
        $('#filed_deatils').append('<span class="m-3">Proceducer Hindi</span>');
        $('#filed_deatils').append('<input type="text" id="editor1">');
        $.ajax({
            type: "POST",
            url: "{{ url('temple-get-pooja-details') }}",
            data: {data:id},
            success: function (response) {
                $('#exampleModalLabel').text('Proceducer');
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .then(editor => {
                        editor.setData(response.procudre);
                    })
                ClassicEditor
                    .create(document.querySelector('#editor1'))
                    .then(editor => {
                        editor.setData(response.procedure_hindi);
                    })
            }
        });
    });

    $('.view_description').click(function(){
        var id = $(this).data('id');
        $('#exampleModalLabel').empty();
        $('#filed_deatils').empty();
        $('#filed_deatils').append('<input type="text" id="editor">');
        $('#filed_deatils').append('<span class="m-3">Description Hindi</span>');
        $('#filed_deatils').append('<input type="text" id="editor1">');
        $.ajax({
            type: "POST",
            url: "{{ url('temple-get-pooja-details') }}",
            data: {data:id},
            success: function (response) {
                $('#exampleModalLabel').text('Description');
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .then(editor => {
                        editor.setData(response.description);
                    })
                    .catch(error => {
                        console.error(error);
                    });
                ClassicEditor
                    .create(document.querySelector('#editor1'))
                    .then(editor => {
                        editor.setData(response.description_hindi);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        });
    });

    ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
        // editor.setData(response.procudre);
    })
</script>

@endsection
