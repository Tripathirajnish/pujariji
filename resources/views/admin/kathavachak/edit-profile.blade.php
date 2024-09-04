@extends('admin.layout.layouts')
@section('title','Update Profile')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Update Profile</h5>
            <a href="{{ url('kathavachak-list') }}" class="btn btn-primary text-white"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
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




        <form action="{{ route('UpdateKathavachak') }}" class="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body row">
                <input type="hidden" name="kthavchk_id" value="{{ $data->kthavchk_id }}">
                <div class="col-6 mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="kthavchk_name" class="form-control" id="" value="{{ input_value($data->kthavchk_name,old('kthavchk_name')) }}" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Surname</label>
                    <input type="text" name="kthavchk_surname" class="form-control" id="" value="{{ input_value($data->kthavchk_surname,old('kthavchk_surname')) }}" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Father Name</label>
                    <input type="text" name="kthavchk_father" class="form-control" id="" value="{{ input_value($data->kthavchk_father,old('kthavchk_father')) }}" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Phone</label>
                    <input type="text" name="kthavchk_phone" value="{{ input_value($data->kthavchk_phone,old('kthavchk_phone')) }}" class="form-control numericInput" maxlength="10" id="" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Whats App</label>
                    <input type="text" name="kthavchk_whatsapp" value="{{ input_value($data->kthavchk_whatsapp,old('kthavchk_whatsapp')) }}" class="form-control numericInput" id="" maxlength="10" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">DOB</label>
                    <input type="date" name="kthavchk_dob" value="{{ input_value($data->kthavchk_dob,old('kthavchk_dob')) }}" class="form-control" id="" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Education</label>
                    <input type="text" name="kthavchk_education" value="{{ input_value($data->kthavchk_education,old('kthavchk_education')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Gender</label>
                    <select class="form-select" name="kthavchk_gender">
                        <option value="0" @if($data->kthavchk_gender=='0') selected @endif>Male</option>
                        <option value="1" @if($data->kthavchk_gender=='0') selected @endif>Female</option>
                        <option value="2" @if($data->kthavchk_gender=='0') selected @endif>Other</option>
                    </select>
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Address</label>
                    <input type="text" name="kthavchk_address" value="{{ input_value($data->kthavchk_address,old('kthavchk_address')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Village/Flat</label>
                    <input type="text" name="kthavchk_vill_flat" value="{{ input_value($data->kthavchk_vill_flat,old('kthavchk_vill_flat')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Post</label>
                    <input type="text" name="kthavchk_post" value="{{ input_value($data->kthavchk_post,old('kthavchk_post')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Police Station</label>
                    <input type="text" name="kthavchk_polic_station" value="{{ input_value($data->kthavchk_polic_station,old('kthavchk_polic_station')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">State</label>
                        @php
                            $states = DB::table('pujari_state')->where('status','0')->orderBy('state','asc')->get();
                        @endphp
                    <select name="state" id="" class="form-select state_selected">
                        <option value="" selected="selected" disabled>Select State</option>
                        @foreach($states as $s)
                            <option value="{{ $s->state }}" @if(input_value($data->kthavchk_state,old('kthavchk_state'))==$s->state) selected @endif>{{ $s->state }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6 mb-3">
                    <label for="name">City</label>
                    <select name="city" class="form-select" id="city">
                        <option value="{{ input_value($data->kthavchk_city,old('kthavchk_city')) }}" selected>{{ input_value($data->city,old('city')) }}</option>
                    </select>
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Pincode</label>
                    <input type="text" name="kthavchk_pincode" value="{{ input_value($data->kthavchk_pincode,old('kthavchk_pincode')) }}" class="form-control numericInput" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Other Job</label>
                    <input type="text" name="kthavchk_otherjob" value="{{ input_value($data->kthavchk_otherjob,old('kthavchk_otherjob')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">GST Name</label>
                    <input type="text" name="kthavchk_gst_name" value="{{ input_value($data->kthavchk_gst_name,old('kthavchk_gst_name')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">GST Number</label>
                    <input type="text" name="kthavchk_gstno" value="{{ input_value($data->kthavchk_gstno,old('kthavchk_gstno')) }}" class="form-control" placeholder="">
                </div>
                {{-- <div class="col-6 mb-3">
                    <label for="name">Language</label>
                    <input type="text" name="kthavchk_language" value="{{ input_value($data->kthavchk_language,old('kthavchk_language')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Katha</label>
                    <input type="text" name="kthavchk_katha" value="{{ input_value($data->kthavchk_katha,old('kthavchk_katha')) }}" class="form-control" placeholder="">
                </div> --}}
                <div class="col-6 mb-3">
                    <label for="name">Youtube Link</label>
                    <input type="text" name="kthavchk_youtube" value="{{ input_value($data->kthavchk_youtube,old('kthavchk_youtube')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Katha Price</label>
                    <input type="text" name="kthavchk_price" value="{{ input_value($data->kthavchk_price,old('kthavchk_price')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">About</label>
                    <input type="text" name="kthavchk_about" value="{{ input_value($data->kthavchk_about,old('max_price')) }}" class="form-control" placeholder="">
                </div>

                <div class="col-3 m-0 p-0">
                    <label for="name">Image</label>
                    <input type="file" name="kthavchk_image" class="form-control" id="imageInput">
                </div>
                <div class="col-3 m-0 p-0">
                    <img class="p-1" height="150" id="imagePreview" alt="" src="{{ $data->kthavchk_image }}">
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



<script>
    $(document).ready(function() {
        $('.state_selected').on('change', function() {
            var selectedState = $(this).val();

            $.ajax({
                url: "{{ url('get_vendor_cities') }}",
                type: 'POST',
                data: { data: selectedState },
                success: function(data) {
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
                },
                error: function() {
                    console.error('Failed to fetch cities');
                }
            });
        });
    });
</script>
@endsection
