@extends('admin.layout.layouts')
@section('title','Update Yajman')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="card m-3">
        <div class="card-header fw-bold">
            <h5 class="">Update Yajman</h5>
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

        <form action="{{ url('update-jajmaan-post')}}" method="POST" enctype="multipart/form-data">
            <div class="card-body row">
                @csrf
                <input type="hidden" name="jajmaan_id" value="{{ $jajmaan->jajmaan_id }}">
                <div class="col-6 mb-3">
                    <label for="name">Yajman Name</label>
                    <input type="text" name="name" class="form-control" id="" value="{{ input_value($jajmaan->name,old('name')) }}" placeholder="Enter Yajman Name">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Yajman Surname</label>
                    <input type="text" name="surname" class="form-control" id="" value="{{ input_value($jajmaan->surname,old('surname')) }}" placeholder="Enter Yajman Surname">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Yajman Address</label>
                    <input type="text" name="address" class="form-control" id="" value="{{ input_value($jajmaan->address,old('address')) }}" placeholder="Enter Yajman Name">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Yajman Hosrescope</label>
                    <input type="text" name="horoscope" class="form-control" id="" value="{{ input_value($jajmaan->horoscope,old('horoscope')) }}" placeholder="Enter Yajman Name">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Yajman Phone</label>
                    <input type="text" name="phone" class="form-control numericInput" maxlength="10" pattern="[6-9][0-9]{9}" id="" value="{{ input_value($jajmaan->phone,old('phone')) }}" placeholder="Enter Yajman Name">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Yajman State</label>
                    <input type="text" name="state" class="form-control" id="" value="{{ input_value($jajmaan->state,old('state')) }}" placeholder="Enter Yajman Name">
                </div>
                <div class="col-6 mb-3">
                    <label for="name">Yajman City</label>
                    <input type="text" name="city" class="form-control" id="" value="{{ input_value($jajmaan->city,old('city')) }}" placeholder="Enter Yajman Name">
                </div>
                <div class="col-6 mb-3">
                    <select name="gender" class="form-control">
                        <option value="0" @if(input_value($jajmaan->gender,old('gender'))=='0') selected @endif>Male</option>
                        <option value="1" @if(input_value($jajmaan->gender,old('gender'))=='1') selected @endif>Female</option>
                        <option value="2" @if(input_value($jajmaan->gender,old('gender'))=='2') selected @endif>Other</option>
                    </select>
                </div>
                <div class="col-4 mb-3">
                    <label for="name">Yajman Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-4 mb-3">
                    <img src="{{ $jajmaan->image }}" width="180" height="150" class="img-responsive">
                </div>

                <div class="col-4">
                    <div class="py-5">
                        <button type="submit" class="btn @if(session('success')) btn-success @else btn-secondary @endif p-4">Update {{ input_value($jajmaan->name,old('name')) }} Profile</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>








@endsection
