    @extends('admin.layout.layouts')
    @section('content')
    @section('title','Profile')

    <style>
        .fa-2x {
            font-size: 3rem !important;
        }

        .border-top-primary {
            border-top: 0.25rem solid #233f91 !important;
        }

    </style>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <section style="background-color: #eee;">
                <div class="container pt-3">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="{{ url('assets/img/admin/'.$admin->image) }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height: 150px;">
                                    <h5 class="my-3">{{ $admin->name }}</h5>
                                    <p class="text-muted mb-1" style="font-size: 15px;">{{ $admin->email }}</p>
                                    <p class="text-muted mb-3">{{ $admin->address }}</p>
                                    <hr class="m-0 p-0">
                                    <p class="text-muted mb-0">Member Since : {{ date('M-Y',strtotime($admin->created_at)) }}</p>
                                    <p class="text-muted mb-0">Last Modified : {{ date('M-Y',strtotime($admin->updated_at)) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Full Name</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $admin->name }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $admin->email }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Phone</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $admin->phone }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Mobile</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $admin->mobile }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{ $admin->address }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Update</p>
                                        </div>
                                        <div class="col-sm-9 my-2">
                                            <p class="text-muted mb-0">
                                                <button type="button" class="btn btn-primary btn-sm me-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Profile</button>
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal2">Password</button>
                                                <button type="button" class="btn btn-danger btn-sm ms-5" data-bs-toggle="modal" data-bs-target="#exampleModal3">FCM Server Key</button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="row">
            <section style="background-color: #eee;">
                <div class="card mb-4">
                    <div class="row">
                        <h6 class="m-2 mb-0 px-4 pt-2">Compny Details</h6>
                    </div>
                    <hr>
                    <div class="card px-5">
                        <div class="row">
                            <div class="col-sm-2">
                                <p class="mb-0">Company Name</p>
                            </div>
                            <div class="col-sm-4">
                                <p class="text-muted mb-0">{{ $company->name }}</p>
                            </div>

                            <div class="col-sm-2">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-4">
                                <p class="text-muted mb-0">{{ $company->address }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-2">
                                <p class="mb-0">City</p>
                            </div>
                            <div class="col-sm-4">
                                <p class="text-muted mb-0">{{ $company->city }}</p>
                            </div>
                            <div class="col-sm-2">
                                <p class="mb-0">State</p>
                            </div>
                            <div class="col-sm-4">
                                <p class="text-muted mb-0">{{ $company->state }}</p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2">
                                    <p class="mb-0">Pincode</p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="text-muted mb-0">{{ $company->pincode }}</p>
                                </div>
                                <div class="col-sm-2">
                                    <p class="mb-0">CIN Number</p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="text-muted mb-0">{{ $company->cin_number }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="text-muted mb-0">{{ $company->email }}</p>
                                </div>
                                <div class="col-sm-2">
                                    <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="text-muted mb-0">{{ $company->mobile }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-3 mb-1">

                                <div class="col-sm-7">
                                    <button class="btn btn-primary btn-sm float-end" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal4">Update Company Details</button>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="row mb-4">
            <section style="background-color: #eee;">
                <div class="card mb-4">
                    <div class="row">
                        <h6 class="m-2 mb-0 px-4 pt-2">Member Login Details</h6>
                    </div>
                    <hr>
                    <div class="card px-5">
                        <div class="row fw-bold">
                            <div class="col-3">Admin</div>
                            <div class="col-3">Username</div>
                            <div class="col-3">Password</div>
                            <div class="col-3">Update</div>
                        </div>
                        <hr>
                        @foreach ($member as $item)
                        <div class="row">
                            <div class="col-3">
                                @if($item->type == '0')
                                Account Admin
                                @elseif ($item->type == '1')
                                Event Admin
                                @elseif ($item->type == '2')
                                Customer Support Admin
                                @else
                                Pandit Ji Admin
                                @endif
                            </div>
                            <div class="col-3">{{ $item->login_id }}</div>
                            <div class="col-3"><a href="javascript:void(0)" class="exampleModal_member_click text-muted" data-bs-toggle="modal" data-bs-target="#exampleModal_member" data-type="{{ $item->type }}">***************</a></div>
                            <div class="col-3"><a href="javascript:void(0)" class="exampleModal_member_click" data-bs-toggle="modal" data-bs-target="#exampleModal_member" data-type="{{ $item->type }}"><i class="fa fa-edit text-primary"></i></a></div>
                        </div>
                        <hr>

                        @endforeach

                    </div>
                </div>
        </div>
        </section>
    </div>


    {{-- Profile Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update_profile') }}" class="row" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $admin->name }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $admin->email }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control numericInput" id="mobile" name="mobile" value="{{ $admin->mobile }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control numericInput" id="phone" name="phone" value="{{ $admin->phone }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="address">Address</label>
                            <textarea type="text" class="form-control" id="address" name="address">{{ $admin->address }}</textarea>
                        </div>
                        <div class="form-group col-6">
                            <label for="image">Profile Image</label>
                            <input type="file" class="form-control-file form-control" id="image" name="image">
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary float-end">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    {{-- Profile Password --}}
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update_password') }}" class="row" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-12">
                            <label for="name">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group col-12">
                            <label for="name">Confirm Password</label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword">
                            <span class="text-danger" id="passwordError"></span>
                        </div>
                        <div class="mt-3">
                            <button type="submit" id="update_password" class="btn btn-primary float-end">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    {{-- Server Key --}}
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Server Key</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update_server_key') }}" class="row" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-12">
                            <label for="name">Server Key</label>
                            <textarea class="form-control" id="fcmToken" name="serverkey"></textarea>
                            <span class="text-danger" id="fcmTokenError"></span>
                        </div>
                        <div class="mt-3">
                            <button type="submit" id="update_password_1" class="btn btn-primary float-end">Update Key</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- Profile Modal --}}
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="exampleModalLabel">Update Company Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <hr class="m-0 p-0">
                <div class="modal-body">
                    <form action="{{ route('update_company_details') }}" class="row" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-6">
                            <label for="name">Company Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $company->name }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="email">Address</label>
                            <textarea name="address" id="" class="form-control">{{ $company->address }}</textarea>
                        </div>
                        <div class="form-group col-6">
                            <label for="mobile">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ $company->city }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="phone">State</label>
                            <input type="text" class="form-control" id="state" name="state" value="{{ $company->state }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="image">Pin Code</label>
                            <input type="text" class="form-control-file form-control" id="" name="pincode" value="{{ $company->pincode }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="image">CIN Number</label>
                            <input type="text" class="form-control-file form-control" id="" name="cin_number" value="{{ $company->cin_number }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="image">Email</label>
                            <input type="text" class="form-control-file form-control numerciInput" id="" name="email" value="{{ $company->email	 }}">
                        </div>
                        <div class="form-group col-6">
                            <label for="image">Mobile</label>
                            <input type="text" class="form-control-file form-control numericInput" id="" name="mobile" value="{{ $company->mobile }}">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary float-end">Update Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal_member" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="member_login"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <hr class="m-0 p-0">
                <div class="modal-body">
                    <form action="{{ url('update_member_details') }}" method="post">
                        @csrf
                        <input type="hidden" name="type" id="type">
                        <div class="form-group mt-3">
                            <label for="">Username</label>
                            <input type="text" name="username" id="login_id" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="******">
                        </div>
                        <div class="form-group mt-3 float-end">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.exampleModal_member_click').on('click', function() {
                var id = $(this).data('type');
                if (id === 0) {
                    $('#member_login').text('Account Admin Login');
                }
                if (id === 1) {
                    $('#member_login').text('Event Admin Login');
                }
                if (id === 2) {
                    $('#member_login').text('Customer Support Login');
                }
                if (id === 3) {
                    $('#member_login').text('Pandit Ji Login');
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST"
                    , url: "{{ url('get_member_login') }}"
                    , data: {
                        data: id
                    }
                    , success: function(response) {
                        $('#type').val(id);
                        $('#login_id').val(response);
                    }
                });
            });
        });



        $(document).ready(function() {
            $('.numericInput').on('input', function() {
                var inputVal = $(this).val().replace(/\D/g, '').substring(0, 10);
                $(this).val(inputVal);
            });
        });

    </script>

    <script>
        $(document).ready(function() {
            $('#cpassword').on('keyup', function() {
                var password = $('#password').val();
                var cpassword = $(this).val();
                var errorElement = $('#passwordError');

                if (password !== cpassword) {
                    errorElement.text('Passwords do not match.');
                    $('#update_password').prop('disabled', true);
                } else {
                    $('#update_password').prop('disabled', false);
                    errorElement.text('');
                }
            });
        });

    </script>

    <script>
        $(document).ready(function() {
            $('#fcmToken').on('input', function() {
                var fcmToken = $(this).val();
                var pattern = /^[A-Za-z0-9_-]+:[A-Za-z0-9_-]+$/;
                var errorElement = $('#fcmTokenError');

                if (!pattern.test(fcmToken)) {
                    errorElement.text('Invalid FCM Token format.');
                } else {
                    errorElement.text('');
                }

                // Auto-expand the textarea height based on content
                this.style.height = 'auto';
                this.style.height = (this.scrollHeight) + 'px';
            });
        });

    </script>

    @endsection
