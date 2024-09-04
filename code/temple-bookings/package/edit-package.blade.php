@extends('admin.layout.layouts')
@section('title','Edit Package')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Edit Package</h5>
            <a href="{{ url('temple-package-list') }}" class="btn btn-primary"><i class="fa fa-list"></i> Package List</a>
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




        <form action="{{ url('temple-save-package') }}" class="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body row">
                <input type="hidden" name="package_id" value="{{ $data->package_id }}">
                <div class="col-6 mb-3">
                    <label for="name">Package Name</label>
                    <input type="text" name="package_name" class="form-control" id="" value="{{ input_value($data->name,old('package_name')) }}" placeholder="Enter Package Name">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Package Name Hindi</label>
                    <input type="text" name="package_name_hindi" class="form-control" id="" value="{{ input_value($data->name_hindi,old('package_name_hindi')) }}" placeholder="Enter Package Name in Hindi">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Pooja</label>
                    <select name="pooja" class="form-control" id="pooja" required>
                        <option value="" selected disabled>--Select Pooja Category--</option>
                        @foreach ($pooja as $key => $value)
                        <option value="{{ $value->pooja_id }}" @if(input_value($data->pooja_id,old('pooja'))==$value->pooja_id) selected @endif>{{ $value->name }}({{ $value->name_hindi }})</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Package Price</label>
                    <input type="text" name="package_price" value="{{ input_value($data->price,old('package_price')) }}" class="form-control numericInput" maxlength="10" id="" placeholder="Enter Package Price">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Procedure</label>
                    <textarea name="procedure" class="form-control" id="editor" placeholder="Enter Package Procedure">{{ input_value($data->procudre,old('procedure')) }}</textarea>
                </div>

                <div class="col-6">
                    <label for="name">Procedure Hindi</label>
                    <textarea name="procedure_hindi" class="form-control" id="editor1" placeholder="Enter Package in Procedure">{{ input_value($data->procedure_hindi,old('procedure_hindi')) }}</textarea>
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Description</label>
                    <textarea name="package_description" class="form-control" id="" placeholder="Enter Package Description">{{ input_value($data->description,old('package_description')) }}</textarea>
                </div>

                <div class="col-6">
                    <label for="name">Description in Hindi</label>
                    <textarea name="package_description_hindi" class="form-control" id="" placeholder="Enter Package Description in Hindi">{{ input_value($data->description_hindi,old('package_description_hindi')) }}</textarea>
                </div>

                <div class="col-12 m-0 mb-3 d-flex justify-content-end">
                    <button class="btn btn-primary p-3" type="submit" name="add_new_package">Save Package Details</button>
                </div>

            </div>
        </form>
    </div>
</div>


<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
        });

    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
    });
</script>




@endsection
