@extends('admin.layout.layouts')
@section('title','Astrology Store Plan')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    table th {
        font-size: 11px !important;
        padding: 1 !important;
    }

    table td {
        font-size: 11px !important;
        padding: 1 !important;
    }

</style>


<script>
    // $(document).ready( function () {
    //     $('#my_dataTable').DataTable({
    //         processing: true,
    //         serverSide: true,
    //         ajax: "{!! route('get.astro') !!}",
    //         columns: [
    //             { data: 'id', name: 'id'},
    //             { data: 'Astrologer', name: 'Astrologer'},
    //             { data: 'phone', name: 'phone'},
    //             { data: 'astro_city', name: 'astro_city'},
    //             { data: 'astro_state', name: 'astro_state'},
    //             { data: 'action', name: 'action'},
    //         ]
    //     });
    // } );
</script>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Astrology Store Plan</h5>
                <a class="btn btn-primary text-white" href="{{ url('astrology-plan') }}"><i class="fa fa-list"></i> Plan List</a>
             </div>
             <form action="{{ url('save_plan') }}" method="post" enctype="multipart/form">
            <div class="card-body py-3 row">
                    @csrf
                <div class="col-6 mb-3">
                    <span>Plan Name</span>
                    <input type="text" class="form-control" placeholder="Enter Plan Name" name="name" value="{{ old('name') }}">
                </div>
                <div class="col-6 mb-3">
                    <span>Subtitle</span>
                    <input type="text" class="form-control" placeholder="Enter Subtitle" name="subtitle" value="{{ old('subtitle') }}">
                </div>
                <div class="col-6 mb-3">
                    <span>Description</span>
                    <textarea class="form-control" placeholder="Enter Description" name="description">{{ old('description') }}</textarea>
                </div>
                <div class="col-6 mb-3">
                    <span>Features</span>
                    <textarea class="form-control" placeholder="Enter Features" name="features[]">{{ old('features') }}</textarea>
                </div>
                <div class="col-6 mb-3">
                    <span>MRP</span>
                    <input type="text" class="form-control numericInput" maxlength="10" placeholder="Enter Plan MRP" name="mrp" value="{{ old('mrp') }}">
                </div>
                <div class="col-6 mb-3">
                    <span>Price</span>
                    <input type="text" class="form-control numericInput" maxlength="10" placeholder="Enter Plan Price" name="price" value="{{ old('price') }}">
                </div>
                <div class="col-6 mb-3">
                    <span>Talk Time</span>
                    <input type="text" class="form-control numericInput" maxlength="10" placeholder="Enter Talk Time" name="talk_time" value="{{ old('talk_time') }}">
                </div>
                <div class="col-12 m-3 d-flex justify-content-end">
                    <button class="btn btn-primary me-5" type="submit" name="save">Save Plan</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>


@endsection
