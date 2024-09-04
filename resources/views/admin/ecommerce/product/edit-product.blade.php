@extends('admin.layout.layouts')
@section('title','Edit Product')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Edit Product</h5>
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
                <input type="hidden" name="product_id" id="" value="{{ $data->product_id }}">
                <div class="col-6 mb-3">
                    <label for="name">Product Name</label>
                    <input type="text" name="product_name" class="form-control" id="" value="{{ input_value($data->name_eng,old('product_name')) }}" placeholder="Enter Product Name">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Product Name Hindi</label>
                    <input type="text" name="product_name_hindi" class="form-control" id="" value="{{ input_value($data->name_hindi,old('product_name_hindi')) }}" placeholder="Enter Product Name in Hindi">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Description</label>
                    <textarea name="product_description" class="form-control" id="editor" placeholder="Enter Product Description">{{ input_value($data->desc_eng,old('product_description')) }}</textarea>
                </div>

                <div class="col-6">
                    <label for="name">Description in Hindi</label>
                    <textarea name="product_description_hindi" class="form-control" id="editor1" placeholder="Enter Product Description in Hindi">{{ input_value($data->desc_hindi,old('product_description_hindi')) }}</textarea>
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Product Price</label>
                    <input type="text" name="product_price" class="form-control" id="" value="{{ input_value($data->price,old('product_price')) }}" placeholder="Enter Product Name">
                </div>
                <div class="col-6 mb-3"></div>

                <div class="col-6">
                    <label for="name">Thumbnail Image</label>
                    <input type="file" name="thumbnail_image" class="form-control" id="imageInput">
                </div>
                <div class="col-6">
                    <img class="p-1" height="150" id="imagePreview" alt="">
                    <img class="p-1" src="{{ $data->thumbnail_image }}" height="150" id="imagePreview" alt="">
                </div>

                <div class="col-6">
                    <label for="name">Slider Images</label>
                    <input type="file" multiple name="slider_image[]" class="form-control" id="sliderImage">
                </div>
                <div class="col-6">
                    <img class="p-1" height="150" id="photos-preview" alt="">
                    <div class="preview"></div>
                </div>
                <div class="col-12">
                    <?php foreach ($data->productImagesWithUrl as $index => $image): ?>
                            <img src="<?= $image ?>" class="p-2" height="150" alt="">
                    <?php endforeach; ?>
                </div>

                <div class="col-12 m-0 mb-3 d-flex justify-content-end">
                    <button class="btn btn-primary p-3" type="submit" name="add_new_pooja">Save Product</button>
                </div>


            </div>
        </form>
    </div>
</div>


<script>
    CKEDITOR.inline( 'editor', {
        // removePlugins: 'toolbar'
    } );
    CKEDITOR.inline( 'editor1', {
        // removePlugins: 'toolbar'
    } );


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
