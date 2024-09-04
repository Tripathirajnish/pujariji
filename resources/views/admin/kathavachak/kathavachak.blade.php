@extends('admin.layout.layouts')
@section('title','Kathavachak List')
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
    $states = DB::table('pujari_state')->where('status','0')->orderBy('state','asc')->get();
    $cities = DB::table('pujari_city')->where('status','0')->orderBy('city','asc')->get();
@endphp

{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Kathavachak List</h5>
                <div class="bg-light p-1">
                    <label class="fw-bold"> Apply Filters : </label>
                    <form action="{{ url('kathavachak_filter') }}" method="GET" class="d-inline">
                        
                        <select name="state" class="form-control-sm state_selected" id="state">
                            <option value="" disabled selected>State Filter</option>
                           @foreach ($states as $item)
                               <option value="{{ $item->state }}" @isset($state) @if($state==$item->state) selected @endif @endisset>{{ $item->state }}</option>
                           @endforeach
                        </select>
                        <select name="city" class="form-control-sm" id="city" onchange="this.form.submit()">
                           <option value="" disabled selected>City Filter</option>
                        </select>
                        {{-- <select name="status" class="form-control-sm" id="booking_status"  onchange="this.form.submit()">
                            <option selected disabled>Verification Status</option>
                            <option value="{{ base64_encode('1') }}" @isset($filter) @if($filter=='1') selected @endif @endisset>Pending</option>
                            <option value="{{ base64_encode('0') }}" @isset($filter) @if($filter=='0') selected @endif @endisset>Verified</option>
                            <option value="{{ base64_encode('2') }}" @isset($filter) @if($filter=='2') selected @endif @endisset>Rejected</option>
                        </select> --}}
                     </form>
                     <button type="button" class="btn btn-dark btn-sm" onclick="window.location='{{ url('kathavachak-list') }}'">Clear Filters</button>
                 </div>
             </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>#</th>
                                <th>KathaVachak</th>
                                <th>Contact</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Cash</th>
                                <th>Katha Done</th>
                                <th>Katha Price</th>
                                @if(session('type')==base64_encode('master_admin'))
                                <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kathavachak as $data)
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="d-flex justify-space-between">
                                        <div><img src="{{ $data->kthavchk_image ?: url('assets/img/no-image.png')  }}" class="img-responsive rounded-circle" width="50" height="50" alt=""></div>
                                        <div class="pt-2 ms-1">
                                            {{-- <a href="#" class="text-nowrap details" data-id="{{ $data->kthavchk_id }}" data-bs-toggle="modal" data-bs-target="#flipInXAnimationModal" title="View More">{{ $data->kthavchk_name }} {{ $data->kthavchk_surname }}</a><br> --}}
                                            <a href="{{ url('kathavachak-profile',base64_encode($data->kthavchk_id)) }}" class="" title="View More">{{ $data->kthavchk_name }} {{ $data->kthavchk_surname }}</a><br>
                                            <span class="text-nowrap">
                                                <small class="small">{{ $data->kthavchk_id }}</small>
                                                @if($data->kthavchk_gender=='0')
                                                <small><i class="bx bx-male"></i></small>
                                                @elseif($data->kthavchk_gender=='1')
                                                <small><i class="bx bx-female"></i></small>
                                                @else
                                                <small><i class="fa fa-transgender"></i></small>
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="tel:{{ $data->kthavchk_phone }}" class="text-nowrap"><i class="bx bx-phone text-primary"></i> {{ $data->kthavchk_phone }}</a><br>
                                    <a href="https://wa.me/+91{{ $data->kthavchk_whatsapp }}" class="text-nowrap"><i class="fa fa-whatsapp text-success me-2 fs-5"></i> {{ $data->kthavchk_whatsapp }}</a>
                                </td>
                                <td>{{ $data->kthavchk_city }}</td>
                                <td>{{ $data->kthavchk_state }}</td>
                                <td>₹{{ kathavachak_cash_collected($data->kthavchk_id) }}</td>
                                <td><a href="" title="View Bookings">{{ kathavachak_katha_done($data->kthavchk_id) }}</a></td>
                                <td>₹{{ $data->kthavchk_price }}</td>
                                @if(session('type')==base64_encode('master_admin'))
                                <td>
                                    <a href="#" class="updateStatustoggle" data-url="{{ url('update_kathavachak') }}" data-id="{{ $data->kthavchk_id }}">
                                        @if($data->status=='0')
                                        <i class="fa fa-eye text-success"></i>
                                        @else
                                        <i class="fa fa-eye-slash text-danger"></i>
                                        @endif
                                    </a>
                                    @if(session('type')==base64_encode('master_admin'))
                                    <span class="mx-2">||</span>
                                    <a href="{{ url('update-profile',base64_encode($data->kthavchk_id)) }}"><i class="fa fa-edit text-info"></i></a>
                                    <span class="mx-2">||</span>
                                    <i class="fa fa-trash text-danger delete_this" data-id="{{ $data->kthavchk_id }}" data-url="{{ url('delete_kathavachak') }}"></i>
                                    @endif
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



{{-- Kathavachak More Details --}}

<div class="modal animate__animated animate__flipInX" id="flipInXAnimationModal" tabindex="-1" aria-labelledby="flipInXAnimationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex justify-content-between w-100">
                    <h5 class="modal-title" id="exampleModalLabel">Kathavachak Details</h5>
                </div>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Name : </label> <span id="name"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Surname : </label> <span id="surname"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Father Name : </label> <span id="father_name"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Contact : </label> <span id="contact"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">WhatsApp: </label> <span id="whatsapp"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">DOB : </label> <span id="dob"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Education : </label> <span id="education"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Gender : </label> <span id="gender"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Address : </label> <span id="address"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Village/Flat : </label> <span id="vill"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Post : </label> <span id="post"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Police Station : </label> <span id="piloce"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">City : </label> <span id="city"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">State : </label> <span id="state"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Pincode : </label> <span id="pincode"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Other Job : </label> <span id="other_job"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">GST No : </label> <span id="gst"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Wallet Balance : </label> <span id="wallet"></span>
                    </div>

                    <div class="mb-1 col-4">
                        <label class="fw-bold">Youtube Link : </label> <span id="youtube"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Price : </label> <span id="price"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Katha : </label> <span id="katha"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">About : </label> <span id="about"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Language : </label> <span id="language"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Aadhar : </label> <span id="aadhar"></span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Send Notification : </label>
                        <button class="btn btn-primary" type="button">Send Now</button>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Average Ratings</label>
                        <span class="btn btn-success" type="button">4.2</span>
                    </div>
                    <div class="mb-1 col-4">
                        <label class="fw-bold">Total Ratings</label>
                        <span class="btn btn-info" type="button"> <i class="fa fa-eye"></i> 42</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- Get Kathavachak Details --}}
<script>
    $('.details').click(function() {
        var id = $(this).data('id');
        $.ajax({
            type: "POST"
            , url: "{{ url('get_kathavachak_details') }}"
            , data: {
                data: id
            }
            , success: function(response) {
                $('#name').text(response.kthavchk_name);
                $('#surname').text(response.kthavchk_surname);
                $('#father_name').text(response.kthavchk_father);
                $('#contact').text(response.kthavchk_phone);
                $('#whatsapp').text(response.kthavchk_whatsapp);
                $('#dob').text(response.kthavchk_dob);
                $('#education').text(response.kthavchk_education);
                $('#gender').text(response.kthavchk_gender);
                $('#address').text(response.kthavchk_address);
                $('#vill').text(response.kthavchk_vill_flat);
                $('#piloce').text(response.kthavchk_polic_station);
                $('#city').text(response.kthavchk_city);
                $('#state').text(response.kthavchk_state);
                $('#pincode').text(response.kthavchk_pincode);
                $('#other_job').text(response.kthavchk_otherjob);
                $('#gst').text(response.kthavchk_gstno);
                $('#language').text(JSON.parse(response.kthavchk_language).join(', '));
                $('#katha').text(JSON.parse(response.kthavchk_katha).join(', '));
                $('#youtube').text(response.kthavchk_youtube);
                $('#price').text(response.kthavchk_price);
                $('#aadhar').append('<img src="' + response.kthavchk_aadharpic + '" alt="Image Alt Text" width="150" height="100">');
                $('#about').text(response.kthavchk_about);
                $('#wallet').text(response.kthavchk_wallet);
            }
        });
    });

</script>

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
