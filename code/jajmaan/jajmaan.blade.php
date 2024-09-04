@extends('admin.layout.layouts')
@section('title','Yajman List')
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
@php
    $states = DB::table('states')->where('status','Active')->orderBy('state_title','asc')->get();
@endphp

{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Yajman List</h5>
                <div class="bg-light p-1">
                    <label class="fw-bold"> Apply Filters : </label>
                    <form action="{{ url('jajmaan_filter') }}" method="GET" class="d-inline">
                     <select name="state" class="form-control-sm state_selected" id="state">
                         <option value="" disabled selected>State Filter</option>
                        @foreach ($states as $item)
                            <option value="{{ $item->state_title }}" @isset($state) @if($state==$item->state_title) selected @endif @endisset>{{ $item->state_title }}</option>
                        @endforeach
                     </select>
                     <select name="city" class="form-control-sm" id="city" onchange="this.form.submit()">
                        <option value="" disabled selected>City Filter</option>
                     </select>
                     </form>
                     <button type="button" class="btn btn-dark btn-sm" onclick="window.location='{{ url('jajmaan') }}'">Clear Filters</button>
                 </div>
             </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>#</th>
                                <th>Yajman</th>
                                <th>Gender</th>
                                <th>Contact</th>
                                <th>City</th>
                                <th>State</th>
                                @if(session('type')==base64_encode('master_admin'))
                                <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jajmaan as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="d-flex justify-space-between">
                                        <div><img src="{{ $data->image ?: url('/assets/img/avatars/blank_avatar_image.png') }}" class="img-responsive rounded-circle w-px-50 h-px-50" alt=""></div>
                                        <div class="pt-2 ms-1" data-bs-toggle="modal" data-bs-target="#basicModal">
                                            <a href="{{ url('jajmaan-profile',base64_encode($data->jajmaan_id)) }}" class="text-nowrap details">{{ $data->name }} {{ $data->surname }}</a><br>
                                            <span class="text-nowrap">
                                                <small class="small">{{ $data->jajmaan_id }}</small>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if($data->gender=='0')
                                        <small><i class="bx bx-male">Male</i></small>
                                    @elseif($data->gender=='1')
                                        <small><i class="bx bx-female">Female</i></small>
                                    @else
                                        <small><i class="fa fa-transgender">Other</i></small>
                                    @endif
                                </td>
                                <td>
                                    <a href="tel:{{ $data->phone }}" class="text-nowrap"><i class="bx bx-phone text-primary"></i> {{ $data->phone }}</a>
                                </td>
                                <td>{{ $data->city }}</td>
                                <td>{{ $data->state }}</td>
                                @if(session('type')==base64_encode('master_admin'))
                                <td>
                                    <a href="javascript:void(0)" class="updateStatustoggle" data-url="{{ url('update_jajmaan') }}" data-id="{{ $data->jajmaan_id }}">
                                        @if($data->status=='0')
                                        <i class="fa fa-eye text-success"></i>
                                        @else
                                        <i class="fa fa-eye-slash text-danger"></i>
                                        @endif
                                    </a>
                                    <span class="mx-2">||</span>
                                    <a href="{{ url('edit-jajmaan',base64_encode($data->jajmaan_id)) }}"><i class="fa fa-edit text-info"></i></a>
                                    <span class="mx-2">||</span>
                                    <i class="fa fa-trash text-danger delete_this" data-id="{{ $data->jajmaan_id }}" data-url="{{ url('delete_jajmaan') }}"></i>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        // Variable to store the selected city
        var selectedCity = "{{ $filter_city??'' }}";

        $('body').on('change', '.state_selected', function() {
            var selectedState = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ url('get_cities') }}",
                type: 'POST',
                data: { data: selectedState },
                success: function(data) {
                    var citySelect = $('#city');
                    citySelect.empty();
                    citySelect.append($('<option></option>').text('Select City'));

                    if (data.length > 0) {
                        $.each(data, function(index, city) {
                            citySelect.append($('<option></option>').attr('value', city.name).text(city.name));
                        });
                    } else {
                        citySelect.append($('<option></option>').text('No cities found'));
                    }

                    // Set the selected city back after the request is successful
                    if (selectedCity) {
                        citySelect.val(selectedCity);
                    }
                },
                error: function() {
                    console.error('Failed to fetch cities');
                }
            });
        });

        // Trigger the change event on page load
        $('.state_selected').trigger('change');
    });
</script>




@endsection
