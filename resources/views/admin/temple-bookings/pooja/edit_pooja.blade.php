@extends('admin.layout.layouts')
@section('title','Edit Temple Pooja')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Edit Temple Pooja</h5>
            <a href="{{ url('temple-pooja-list') }}" class="btn btn-primary"><i class="fa fa-list"></i> Pooja List</a>
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




        <form action="{{ route('addNewTemplePoojaPost') }}" class="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body row">
                <input type="hidden" name="pooja_id" value="{{ $pooja->pooja_id }}">
                <div class="col-6 mb-3">
                    <label for="name">Temple</label>
                    <select name="temple" class="form-control" id="pooja_category" required>
                        <option value="" selected disabled>--Select Temple--</option>
                        @foreach ($data as $value)
                            <option value="{{ $value->temple_id }}" @if($pooja->temple_id==$value->temple_id) selected @endif>{{ $value->temple_name }}({{ $value->temple_name_hindi }})</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Pooja Name</label>
                    <input type="text" name="pooja_name" class="form-control" id="" value="{{ input_value($pooja->name,old('pooja_name')) }}" placeholder="Enter Pooja Name">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Pooja Name Hindi</label>
                    <input type="text" name="pooja_name_hindi" class="form-control" id="" value="{{ input_value($pooja->name_hindi,old('pooja_name_hindi')) }}" placeholder="Enter Pooja Name in Hindi">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Min Price</label>
                    <input type="text" name="min_price" value="{{ input_value($pooja->min_price,old('min_price')) }}" class="form-control numericInput" maxlength="10" id="" placeholder="Enter Pooja Minimum Price">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Max Price</label>
                    <input type="text" name="max_price" value="{{ input_value($pooja->max_price,old('max_price')) }}" class="form-control numericInput" id="" maxlength="10" placeholder="Enter Pooja Maximum Price">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Description</label>
                    <textarea name="pooja_description" class="form-control" id="" placeholder="Enter Pooja Description">{{ input_value($pooja->description,old('pooja_description')) }}</textarea>
                </div>

                <div class="col-6">
                    <label for="name">Description in Hindi</label>
                    <textarea name="pooja_description_hindi" class="form-control" id="" placeholder="Enter Pooja Description in Hindi">{{ input_value($pooja->description_hindi,old('pooja_description_hindi')) }}</textarea>
                </div>

                <div class="col-6 m-0 p-0">
                    <label for="name">Pooja Image</label>
                    <input type="file" name="selected_image" class="form-control" id="imageInput">
                </div>
                <div class="col-6"></div>
                <div class="col-3 m-0 p-0">
                    <img class="p-1" height="150" id="imagePreview" alt="">
                </div>
                <div class="col-3 m-0 p-0">
                    <img class="p-1" src="{{ $pooja->image }}" height="150" id="imagePreview" alt="">
                </div>

                <div class="col-12 m-0 mb-3 d-flex justify-content-end">
                    <button class="btn btn-primary p-3" type="submit" name="add_new_pooja">Save Pooja Details</button>
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
