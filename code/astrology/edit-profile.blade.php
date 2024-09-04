@extends('admin.layout.layouts')
@section('title','Update Profile')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Update Profile</h5>
            <a href="{{ url('astrologer-list') }}" class="btn btn-primary text-white"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
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




        <form action="{{ route('Updateastrologer') }}" class="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body row">
                <input type="hidden" name="astro_id" value="{{ $data->astro_id }}">
                <div class="col-6 mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="astro_name" class="form-control" id="" value="{{ input_value($data->astro_name,old('astro_name')) }}" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Surname</label>
                    <input type="text" name="astro_surname" class="form-control" id="" value="{{ input_value($data->astro_surname,old('astro_surname')) }}" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Father Name</label>
                    <input type="text" name="astro_father" class="form-control" id="" value="{{ input_value($data->astro_father,old('astro_father')) }}" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Phone</label>
                    <input type="text" name="astro_phone" value="{{ input_value($data->astro_phone,old('astro_phone')) }}" class="form-control numericInput" maxlength="10" id="" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Whats App</label>
                    <input type="text" name="astro_whatsapp" value="{{ input_value($data->astro_whatsapp,old('astro_whatsapp')) }}" class="form-control numericInput" id="" maxlength="10" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">DOB</label>
                    <input type="date" name="astro_dob" value="{{ input_value($data->astro_dob,old('astro_dob')) }}" class="form-control" id="" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Education</label>
                    <input type="text" name="astro_education" value="{{ input_value($data->astro_education,old('astro_education')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Gender</label>
                    <select class="form-select" name="astro_gender">
                        <option value="0" @if($data->astro_gender=='0') selected @endif>Male</option>
                        <option value="1" @if($data->astro_gender=='0') selected @endif>Female</option>
                        <option value="2" @if($data->astro_gender=='0') selected @endif>Other</option>
                    </select>
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Address</label>
                    <input type="text" name="astro_address" value="{{ input_value($data->astro_address,old('astro_address')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Village/Flat</label>
                    <input type="text" name="astro_vill_flat" value="{{ input_value($data->astro_vill_flat,old('astro_vill_flat')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Post</label>
                    <input type="text" name="astro_post" value="{{ input_value($data->astro_post,old('astro_post')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Police Station</label>
                    <input type="text" name="astro_police_station" value="{{ input_value($data->astro_police_station,old('astro_police_station')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">State</label>
                    @php
                    $states = DB::table('pujari_state')->where('status','0')->orderBy('state','asc')->get();
                    @endphp
                    <select name="state" id="" class="form-select state_selected">
                        <option value="" selected="selected" disabled>Select State</option>
                        @foreach($states as $s)
                        <option value="{{ $s->state }}" @if(input_value($data->astro_state,old('astro_state'))==$s->state) selected @endif>{{ $s->state }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6 mb-3">
                    <label for="name">City</label>
                    <select name="city" class="form-select" id="city">
                        <option value="{{ input_value($data->astro_city,old('astro_city')) }}" selected>{{ input_value($data->city,old('city')) }}</option>
                    </select>
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Pincode</label>
                    <input type="text" name="astro_pincode" value="{{ input_value($data->astro_pincode,old('astro_pincode')) }}" class="form-control numericInput" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Other Job</label>
                    <input type="text" name="astro_other_job" value="{{ input_value($data->astro_other_job,old('astro_other_job')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">GST Name</label>
                    <input type="text" name="astro_gst_name" value="{{ input_value($data->astro_gst_name,old('astro_gst_name')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">GST Number</label>
                    <input type="text" name="astro_gst" value="{{ input_value($data->astro_gst,old('astro_gst')) }}" class="form-control" placeholder="">
                </div>
                {{-- <div class="col-6 mb-3">
                    <label for="name">Language</label>
                    <input type="text" name="astro_language" value="{{ input_value($data->astro_language,old('astro_language')) }}" class="form-control" placeholder="">
            </div>
            <div class="col-6 mb-3">
                <label for="name">Katha</label>
                <input type="text" name="astro_katha" value="{{ input_value($data->astro_katha,old('astro_katha')) }}" class="form-control" placeholder="">
            </div> --}}
            <div class="col-6 mb-3">
                <label for="name">Astrology Payment Price</label>
                <input type="text" name="astro_final_price" value="{{ input_value($data->astro_final_price,old('astro_final_price')) }}" class="form-control numericInput" placeholder="">
            </div>
            <div class="col-6 mb-3">
                <label for="name">Astrology Price</label>
                <input type="text" name="astro_price" value="{{ input_value($data->astro_price,old('astro_price')) }}" class="form-control" placeholder="">
            </div>
            <div class="col-6 mb-3">
                <label for="name">About</label>
                <input type="text" name="astro_about" value="{{ input_value($data->astro_about,old('max_price')) }}" class="form-control" placeholder="">
            </div>

            <div class="col-3 m-0 p-0">
                <label for="name">Image</label>
                <input type="file" name="astro_image" class="form-control" id="imageInput">
            </div>
            <div class="col-3 m-0 p-0">
                <img class="p-1" height="150" id="imagePreview" alt="" src="{{ $data->astro_image }}">
            </div>


            <div class="col-12 m-0 mb-3 d-flex justify-content-end">
                <button class="btn btn-primary p-3" type="submit" name="add_new_pooja">Update Profile</button>
            </div>


    </div>
    </form>
</div>
</div>


<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#editor1'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

</script>


<script>
    $(document).ready(function() {
        $('.state_selected').on('change', function() {
            var selectedState = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('get_vendor_cities') }}"
                , type: 'POST'
                , data: {
                    data: selectedState
                }
                , success: function(data) {
                    var citySelect = $('#city');
                    citySelect.empty();
                    citySelect.append($('<option></option>').text('Select City'));

                    if (data.length > 0) {
                        $.each(data, function(index, city) {
                            citySelect.append($('<option></option>').attr('value', city.city).text(city.city));
                        });
                    } else {
                        citySelect.append($('<option></option>').text('No cities found'));
                    }
                }
                , error: function() {
                    console.error('Failed to fetch cities');
                }
            });
        });
    });

</script>

@endsection
