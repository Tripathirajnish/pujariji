@extends('admin.layout.layouts')
@section('title','Pujari Ji || Create Event')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
        #image-preview {
            margin-top: 20px;
        }
        .preview-image {
            width: 150px;
            height: auto;
            margin-right: 10px;
        }
</style>

{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="card-header bg-light d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Create Event</h5>
                <a class="btn btn-primary p-2 me-4 mt-3 add" href="{{ url('event') }}"><i class="fa fa-list"></i> Event List</a>
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

            <div class="card-body py-3">
                <form action="{{ route('addNewEventPost') }}" class="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body m-0 row">

                        <div class="col-6 mb-3">
                            <label for="name">Event Title (English)</label>
                            <input type="text" name="title_eng" class="form-control" id="" value="{{ old('title_eng') }}" placeholder="Event title in English">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="name">Event Title(Hindi)</label>
                            <input type="text" name="title_hin" class="form-control" id="" value="{{ old('title_hin') }}" placeholder="Event title in Hindi">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="name">Event Description(English)</label>
                            <textarea class="form-control" placeholder="Event Description(English)" name="desc_eng">{{ old('desc_eng') }}</textarea>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="name">Event Description(Hindi)</label>
                            <textarea class="form-control" placeholder="Event Description(Hindi)" name="desc_hin">{{ old('desc_hin') }}</textarea>
                        </div>

                        <div class="col-6 mb-3">
                            <label for="name">Event Price</label>
                            <input type="text" name="price" value="{{ old('price') }}" class="form-control numericInput" maxlength="10" id="" placeholder="Enter Event Price">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="name">Dakshina Price</label>
                            <input type="text" name="dakshina_price" value="{{ old('dakshina_price') }}" class="form-control numericInput" id="" maxlength="10" placeholder="Enter Dakshina Price">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="name">Guruseva Price</label>
                            <input type="text" name="guruseva_price" value="{{ old('guruseva_price') }}" class="form-control numericInput" id="" maxlength="10" placeholder="Enter Guruseva Price">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="name">Rudrakshseva Price</label>
                            <input type="text" name="rudrakshseva_price" value="{{ old('rudrakshseva_price') }}" class="form-control numericInput" id="" maxlength="10" placeholder="Enter Rudrakshseva Price">
                        </div>

                        <div class="col-6 mb-3">
                            <label for="name">Prasad Delivery Price</label>
                            <input type="text" name="prasaddelivery_price" value="{{ old('prasaddelivery_price') }}" class="form-control numericInput" id="" maxlength="10" placeholder="Enter Prasad Delivery Price">
                        </div>

                        <div class="col-6">
                            <label for="name">Event Date</label>
                            <input type="date" name="event_date" value="{{ old('event_date') }}" min="{{ date('Y-m-d') }}" class="form-control" placeholder="Enter Event Date">
                        </div>

                        {{-- <div class="col-6">
                            <label for="name">Facebook Link</label>
                            <input type="text" name="fb_link" value="{{ old('fb_link') }}" class="form-control" placeholder="Enter Facebook Link">
                        </div> --}}

                        <div class="col-6 m-0 p-0">
                            <label for="name">Event Image</label>
                            <input type="file" name="event_img[]" multiple class="form-control" id="upload-input" accept="image/*">
                        </div>
                        <div class="col-6"></div>
                        <div class="col-6 m-0 p-0">
                            <div id="image-preview" class="border rounded"></div>
                        </div>


                    </div>
                    <div class="card-footer bg-light m-0">
                        <div class="m-0 mb-3 d-flex justify-content-end">
                            <button class="btn btn-primary p-3" type="submit" name="add_new_pooja">Create Event</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#upload-input").change(function() {
            readURL(this);
        });
    });

    function readURL(input) {
        $('#image-preview').empty(); // Clear previous previews

        if (input.files && input.files.length > 0) {
            for (var i = 0; i < input.files.length; i++) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image-preview').append('<img src="' + e.target.result + '" class="preview-image" alt="Image Preview">');
                }

                reader.readAsDataURL(input.files[i]);
            }
        }
    }
</script>
@endsection
