@extends('admin.layout.layouts')
@section('title','Update Profile')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Update Profile</h5>
            <a href="{{ url('pujariji-list') }}" class="btn btn-primary text-white"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
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




        <form action="{{ route('UpdatePujari') }}" class="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body row">
                <input type="hidden" name="pujari_id" value="{{ $data->pujari_id }}">
                <div class="col-6 mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="" value="{{ input_value($data->name,old('name')) }}" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Surname</label>
                    <input type="text" name="surname" class="form-control" id="" value="{{ input_value($data->surname,old('surname')) }}" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Father Name</label>
                    <input type="text" name="father_name" class="form-control" id="" value="{{ input_value($data->father_name,old('father_name')) }}" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Phone</label>
                    <input type="text" name="phone_number" value="{{ input_value($data->phone_number,old('phone_number')) }}" class="form-control numericInput" maxlength="10" id="" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Whats App</label>
                    <input type="text" name="whatsapp_number" value="{{ input_value($data->whatsapp_number,old('whatsapp_number')) }}" class="form-control numericInput" id="" maxlength="10" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">DOB</label>
                    <input type="date" name="date_of_birth" value="{{ input_value(date('Y-m-d',strtotime($data->date_of_birth)),old('date_of_birth')) }}" class="form-control" id="" placeholder="">
                </div>

                <div class="col-6 mb-3">
                    <label for="name">Education</label>
                    <input type="text" name="education" value="{{ input_value($data->education,old('education')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Gender</label>
                    <select class="form-select" name="gender">
                        <option value="0" @if($data->gender=='0') selected @endif>Male</option>
                        <option value="1" @if($data->gender=='0') selected @endif>Female</option>
                        <option value="2" @if($data->gender=='0') selected @endif>Other</option>
                    </select>
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Address</label>
                    <input type="text" name="address" value="{{ input_value($data->address,old('address')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Village/Flat</label>
                    <input type="text" name="village_or_flat_no" value="{{ input_value($data->village_or_flat_no,old('village_or_flat_no')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Post</label>
                    <input type="text" name="post" value="{{ input_value($data->post,old('post')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Police Station</label>
                    <input type="text" name="police_station" value="{{ input_value($data->police_station,old('police_station')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">State</label>
                        @php
                            $states = DB::table('pujari_state')->where('status','0')->orderBy('state','asc')->get();
                        @endphp
                    <select name="state" id="" class="form-select state_selected">
                        <option value="" selected="selected" disabled>Select State</option>
                        @foreach($states as $s)
                            <option value="{{ $s->state }}" @if(input_value($data->state,old('state'))==$s->state) selected @endif>{{ $s->state }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6 mb-3">
                    <label for="name">City</label>
                    <select name="city" class="form-select" id="city">
                        <option value="{{ input_value($data->city,old('city')) }}" selected>{{ input_value($data->city,old('city')) }}</option>
                    </select>
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Pincode</label>
                    <input type="text" name="pincode" value="{{ input_value($data->pincode,old('pincode')) }}" class="form-control numericInput" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Other Job</label>
                    <input type="text" name="other_job" value="{{ input_value($data->other_job,old('other_job')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">GST Name</label>
                    <input type="text" name="gst_name" value="{{ input_value($data->gst_name,old('gst_name')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">GST Number</label>
                    <input type="text" name="gst_number" value="{{ input_value($data->gst_number,old('gst_number')) }}" class="form-control" placeholder="">
                </div>
                {{-- <div class="col-6 mb-3">
                    <label for="name">Language</label>
                    <input type="text" name="language" value="{{ input_value($data->language,old('language')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Katha</label>
                    <input type="text" name="katha" value="{{ input_value($data->katha,old('katha')) }}" class="form-control" placeholder="">
                </div> --}}
                <div class="col-6 mb-3">
                    <label for="name">Pooja Type</label>
                    <select name="online_or_offline" class="form-select">
                        <option value="" disabled selected>Select Pooja Type</option>
                        <option value="0" @if(input_value($data->online_or_offline,old('online_or_offline'))=='0') selected @endif>Online</option>
                        <option value="1" @if(input_value($data->online_or_offline,old('online_or_offline'))=='1') selected @endif>Offline</option>
                        <option value="2" @if(input_value($data->online_or_offline,old('online_or_offline'))=='2') selected @endif>Both</option>
                    </select>
                    {{-- <input type="text" name="online_or_offline" value="{{ input_value($data->online_or_offline,old('online_or_offline')) }}" class="form-control numericInput" placeholder=""> --}}
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Temple Name</label>
                    <input type="text" name="temple_name" value="{{ input_value($data->temple_name,old('temple_name')) }}" class="form-control" placeholder="">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">About</label>
                    {{-- <input type="text" name="about" value="{{ input_value($data->about,old('about')) }}" class="form-control" placeholder=""> --}}
                    <textarea name="about" id="" class="form-control">{{ $data->about }}</textarea>
                </div>

                <div class="col-3 m-0 p-0">
                    <label for="name">Image</label>
                    <input type="file" name="image" class="form-control" id="imageInput">
                </div>
                <div class="col-3 m-0 p-0">
                    <img class="p-1" height="150" id="imagePreview" alt="" src="{{ $data->pujari_image }}">
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
