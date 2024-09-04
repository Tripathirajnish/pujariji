@extends('admin.layout.layouts')
@section('title','Add New Pooja')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Add New Pooja</h5>
            <a href="{{ url('pooja-list') }}" class="btn btn-primary"><i class="fa fa-list"></i> Pooja List</a>
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




        <form action="{{ route('addNewPoojaPost') }}" class="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body row">

                <div class="col-6 mb-3">
                    <label for="name">Pooja Name</label>
                    <input type="text" name="pooja_name" class="form-control" id="" value="{{ old('pooja_name') }}" placeholder="Enter Pooja Name">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Pooja Name Hindi</label>
                    <input type="text" name="pooja_name_hindi" class="form-control" id="" value="{{ old('pooja_name_hindi') }}" placeholder="Enter Pooja Name in Hindi">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Pooja Category</label>
                    <select name="pooja_category" class="form-control" id="pooja_category" required>
                        <option value="" selected disabled>--Select Pooja Category--</option>
                        @foreach ($categories as $value)
                            <option value="{{ $value->cat_id }}">{{ $value->cat_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Min Price</label>
                    <input type="text" name="min_price" value="{{ old('min_price') }}" class="form-control numericInput" maxlength="10" id="" placeholder="Enter Pooja Minimum Price">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Max Price</label>
                    <input type="text" name="max_price" name="{{ old('max_price') }}" class="form-control numericInput" id="" maxlength="10" placeholder="Enter Pooja Maximum Price">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Description</label>
                    <textarea name="pooja_description" class="form-control" id="" placeholder="Enter Pooja Description">{{ old('pooja_description') }}</textarea>
                </div>

                <div class="col-6">
                    <label for="name">Description in Hindi</label>
                    <textarea name="pooja_description_hindi" class="form-control" id="" placeholder="Enter Pooja Description in Hindi">{{ old('pooja_description_hindi') }}</textarea>
                </div>

                <div class="col-3 m-0 p-0">
                    <label for="name">Pooja Image</label>
                    <input type="file" name="selected_image" class="form-control" id="imageInput">
                </div>
                <div class="col-3 m-0 p-0">
                    <img class="p-1" height="150" id="imagePreview" alt="">
                </div>


                {{-- <div class="row bg-light mt-0 m-1 mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="text-dark fw-bolder">Pooja Package Details</span>
                        <a href="javascript:void(0)" class="mx-3"> <i class="fa fa-plus" style="font-size:13px;"></i>Add</a>
                    </div>
                </div>
                <div class="pooja_packaes row px-5">

                    <div class="col-4 mb-3">
                        <label for="name">Package Name</label>
                        <input type="text" name="package_name[]" class="form-control" placeholder="Package Name">
                    </div>
                    <div class="col-4 mb-3">
                        <label for="name">Package Name Hindi</label>
                        <input type="text" name="package_name_hindi[]" class="form-control" placeholder="Package Name Hindi">
                    </div>
                    <div class="col-4 mb-3">
                        <label for="name">Package Price</label>
                        <input type="text" name="package_price[]" class="form-control numericInput" maxlength="10" placeholder="Package Price">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="name">Package Description</label>
                        <textarea name="package_description[]" class="form-control" maxlength="10" placeholder="Package Description"></textarea>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="name">Package Description Hindi</label>
                        <textarea name="package_description_hindi[]" class="form-control" maxlength="10" placeholder="Package Description Hindi"></textarea>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="name">Package Proceducer</label>
                        <textarea name="package_proceducer[]" class="form-control" id="editor" placeholder="Package Proceducer"></textarea>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="name">Package Proceducer Hindi</label>
                        <textarea name="package_proceducer_hindi[]" class="form-control" id="editor1" placeholder="Package Proceducer Hindi"></textarea>
                    </div>

                </div>

                <div class="row bg-light m-1">Pooja Package Inclusion Details</div>

                <div class="row bg-light m-1">Pooja Material Details</div> --}}

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
