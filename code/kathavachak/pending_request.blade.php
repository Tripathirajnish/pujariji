@extends('admin.layout.layouts')
@section('title','Pujari Ji || Pending Request')
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




{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <h5 class="card-title p-3 pb-0 mb-1">Pending Kathavachak Request List</h5>
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
                                <th>Request Date</th>
                                <th>Katha Price</th>
                                @if(session('type')==base64_encode('3') || session('type')==base64_encode('master_admin'))
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
                                        <div><img src="{{ $data->kthavchk_image }}" class="img-responsive rounded-circle" width="50" height="50" alt=""></div>
                                        <div class="pt-2 ms-1">
                                            <a href="#" class="text-nowrap details" data-id="{{ $data->kthavchk_id }}" data-bs-toggle="modal" data-bs-target="#flipInXAnimationModal" title="View More">{{ $data->kthavchk_name }} {{ $data->kthavchk_surname }}</a><br>
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
                                    <a  href="tel:{{ $data->kthavchk_phone }}" class="text-nowrap"><i class="bx bx-phone text-primary"></i> {{ $data->kthavchk_phone }}</a><br>
                                    <a href="https://wa.me/+91{{ $data->kthavchk_whatsapp }}" class="text-nowrap"><i class="fa fa-whatsapp text-success me-2 fs-5"></i> {{ $data->kthavchk_whatsapp }}</a>
                                </td>
                                <td>{{ $data->kthavchk_city }}</td>
                                <td>{{ $data->kthavchk_state }}</td>
                                <td>{{ date('d-F-Y', strtotime($data->created_at)) }}</td>
                                <td>₹{{ $data->kthavchk_price }}</td>
                                @if(session('type')==base64_encode('3') || session('type')==base64_encode('master_admin'))
                                <td>
                                    <a href="javascript:void(0)" class="verify_kathavachak btn btn-success btn-sm fw-bolder" data-id="{{ $data->kthavchk_id }}" >Verify Kathavachak</a>
                                    <span class="mx-3">||</span>
                                    <a href="javascript:void(0)" class="reject_kathavachak btn btn-danger btn-sm fw-bolder" data-id="{{ $data->kthavchk_id }}">Reject Kathavachak</a>
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

                </div>
            </div>
        </div>
    </div>
</div>


{{-- Get Kathavachak Details --}}
<script>
    $('.details').click(function() {
        var id = $(this).data('id');
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
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




// Verify Kathavachak
 $('.verify_kathavachak').click(function(){
    var id = $(this).attr("data-id");
    var ths = $(this);
    Swal.fire({
        title: "Are you sure?",
        text: "Do You want to verify!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Verify!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ url('verify_kathavachak') }}",
                data: {data:id},
                success: function (response) {
                    toastr.success('Verified Successfully');
                    ths.closest('tr').remove();
                }
            });
        }
    });
 });


// Verify Kathavachak
 $('.reject_kathavachak').click(function(){
    var id = $(this).attr("data-id");
    var ths = $(this);
    Swal.fire({
        title: "Are you sure?",
        text: "Do You want to Reject!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Reject!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ url('reject_kathavachak') }}",
                data: {data:id},
                success: function (response) {
                    toastr.success('Rejected Successfully');
                    ths.closest('tr').remove();
                }
            });
        }
    });
 });

</script>

@endsection
