@extends('admin.layout.layouts')
@section('title','Add New Product')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Add New Product</h5>
            <a href="{{ url('products') }}" class="btn btn-primary"><i class="fa fa-list"></i> Product List</a>
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

        <form action="{{ route('addNewProductPost') }}" class="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body row">

                <div class="col-6 mb-3">
                    <label for="name">Product Name</label>
                    <input type="text" name="product_name" class="form-control" id="" value="{{ old('product_name') }}" placeholder="Enter Product Name">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Product Name Hindi</label>
                    <input type="text" name="product_name_hindi" class="form-control" id="" value="{{ old('product_name_hindi') }}" placeholder="Enter Product Name in Hindi">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Description</label>
                    <textarea name="product_description" class="form-control" id="" placeholder="Enter Product Description">{{ old('product_description') }}</textarea>
                </div>

                <div class="col-6">
                    <label for="name">Description in Hindi</label>
                    <textarea name="product_description_hindi" class="form-control" id="" placeholder="Enter Product Description in Hindi">{{ old('product_description_hindi') }}</textarea>
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Product Price</label>
                    <input type="text" name="product_price" class="form-control" id="" value="{{ old('product_price') }}" placeholder="Enter Product Name">
                </div>
                <div class="col-6 mb-3"></div>

                <div class="col-6">
                    <label for="name">Thumbnail Image</label>
                    <input type="file" name="thumbnail_image" class="form-control" id="imageInput">
                </div>
                <div class="col-6">
                    <img class="p-1" height="150" id="imagePreview" alt="">
                </div>

                <div class="col-6">
                    <label for="name">Slider Images</label>
                    <input type="file" multiple name="slider_image[]" class="form-control" id="sliderImage">
                </div>
                <div class="col-6">
                    <img class="p-1" height="150" id="photos-preview" alt="">
                    <div class="preview"></div>
                </div>

                <div class="col-12 m-0 mb-3 d-flex justify-content-end">
                    <button class="btn btn-primary p-3" type="submit" name="add_new_pooja">Save Product</button>
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


    $(function() {
        var imagesPreview = function(input, placeToInsertImagePreview) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#sliderImage').on('change', function() {
            imagesPreview(this, 'div.preview');
        });
    });
</script>



@endsection
