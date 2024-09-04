@extends('admin.layout.layouts')
@section('title','Add New Pooja')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Add New Pooja</h5>
            <a href="{{ url('virtual-pooja-list') }}" class="btn btn-primary"><i class="fa fa-list"></i> Pooja List</a>
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




        <form action="{{ route('virtual.addNewPoojaPost') }}" class="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body row">
              
                <div class="col-3 mb-3">
                    <label for="name">Pooja Category</label>
                    <select name="pooja_category" class="form-control" id="pooja_category" required>
                        <option value="" selected disabled>--Select Pooja Category--</option>
                        @foreach ($categories as $value)
                            <option value="{{ $value->cat_id }}">{{ $value->cat_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-3 mb-3">
                    <label for="name">Puja date</label>
                    <input type="date" name="puja_date" name="{{ old('puja_date') }}" class="form-control" id="booking-end-date" placeholder="Puja Date">
                </div>

                <div class="col-3 mb-3">
                    <label for="name">Booking End Date</label>
                    <input type="datetime-local" name="booking_end_date" name="{{ old('booking_end_date') }}"  class="form-control" id="booking-end-date" placeholder="Select Booking End Date">
                </div>

                <div class="col-3 mb-3">
                    <label for="name">Fake Booking Count</label>
                    <input type="number" name="booking_count" value="{{ old('booking_count') }}" class="form-control" placeholder="Booking Count">
                </div>

                <div class="col-3 mb-3">
                    <label for="name">Pooja Thumb Image</label>
                    <input type="file" name="selected_image" class="form-control" id="imageInput">
                </div>
                <div class="col-3 m-0 p-0">
                    <img class="p-1" height="150" id="imagePreview" alt="">
                    
                </div>

                <div class="col-3 mb-3">
                    <label for="name">Mandir Image</label>
                    <input type="file" name="temple_image" class="form-control" id="temple-image">
                </div>
                <div class="col-3 m-0 p-0">
                    <img class="p-1" height="150" id="temple-image-preview" alt="">
                    
                </div>


              


                <div class="col-12 m-0 mb-3 d-flex justify-content-end">
                    <button class="btn btn-primary p-3" type="submit" name="add_new_pooja">Save Pooja</button>
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
