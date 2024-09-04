@extends('admin.layout.layouts')
@section('title', $data->kthavchk_name . ' ' . $data->kthavchk_surname . ' Profile')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <section style="background-color: #eee;" class="container py-3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card mb-1">
                        <div class="card-body text-center">
                          <img src="{{ $data->kthavchk_image ?: url('assets/img/no-image.png')  }}" alt="avatar" class="rounded-circle img-fluid" style="width: 100px; height:100px;">
                          <h6 class="my-2">{{ ucwords($data->kthavchk_name.' '.$data->kthavchk_surname) }} <br>s/o {{ $data->kthavchk_father }}</h4>
                            <p class="text-muted mb-0 fw-bold">Profile Status : <span class="text-success">Active</span></p>
                            <p class="text-muted mb-0"><span class="fw-bolder">Registration ID :</span> {{ $data->kthavchk_id }}</p>

                            <p class="text-muted mb-1"><span class="fw-bolder">Phone :</span>
                                <span class="m-2 small">
                                    <i class="bx bx-mobile text-primary"></i>{{ $data->kthavchk_phone }},
                                    <i class="fa fa-whatsapp text-success fs-5"></i>{{ $data->kthavchk_whatsapp }}
                                </span>
                            </p>
                            <p class="text-muted mb-2">Member Since : {{ date('d-m-Y',strtotime($data->created_at)) }}</p>
                          <div class="d-flex justify-content-center mb-0">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Send Notification</button>
                          </div>
                        </div>
                      </div>
                      @if($data->verification=='0')
                      <div class="card mb-1">
                        <div class="card-body p-2">
                          <p class="mb-0 fw-bold">Booking Details</p>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-1 pb-0">
                            <span class="ms-4">Total</span>
                            <p class="mb-0 me-3 fw-bold">{{ $total_booking }}</p>
                          </div>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-1 pb-0">
                            <span class="ms-4">Pending</span>
                            <p class="mb-0 me-3 fw-bold">{{ $pending_booking }}</p>
                          </div>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-1 pb-0">
                            <span class="ms-4">Completed</span>
                            <p class="mb-0 me-3 fw-bold">{{ $completed_booking }}</p>
                          </div>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-1 pb-0">
                            <span class="ms-4">Cancelled</span>
                            <p class="mb-0 me-3 fw-bold">{{ $cancelled_booking }}</p>
                          </div>
                        </div>
                      </div>

                      <div class="card mb-1">
                        <div class="card-body p-2">
                          <p class="mb-0 fw-bold">Earnings</p>

                          <!-- <div class="d-flex justify-content-between align-items-center border-bottom p-1 pb-0">
                            <span class="ms-4">Total</span>
                            <p class="mb-0 me-3 fw-bold">{{ $total_earn }}</p>
                          </div> -->

                          <div class="d-flex justify-content-between align-items-center border-bottom p-1 pb-0">
                            <span class="ms-4">Cash</span>
                            <p class="mb-0 me-3 fw-bold">{{ $cash }}</p>
                          </div>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-1 pb-0">
                            <span class="ms-4">Online</span>
                            <p class="mb-0 me-3 fw-bold">{{ $online }}</p>
                          </div>

                        </div>
                      </div>
                      @endif
                    </div>
                    <div class="col-lg-8">
                      <div class="card mb-4">
                        <div class="card-body">

                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">DOB</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->kthavchk_dob }}</p>
                            </div>
                            <div class="col-sm-3">
                                <p class="mb-0">Gender</p>
                              </div>
                              <div class="col-sm-3">
                                <p class="text-muted mb-0">{{ $data->kthavchk_gender=='0'?'Male':($data->kthavchk_gender=='1'?'Female':'Other') }}</p>
                              </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Education</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $data->kthavchk_education }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $data->kthavchk_address }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Village/Flat</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->kthavchk_vill_flat }}</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="mb-0">Post</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->kthavchk_vill_flat }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Police Station</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->kthavchk_polic_station }}</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="mb-0">City</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->kthavchk_city }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">State</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->kthavchk_state }}</p>
                            </div>
                            <div class="col-sm-3">
                                <p class="mb-0">Pincode</p>
                              </div>
                              <div class="col-sm-3">
                                <p class="text-muted mb-0">{{ $data->kthavchk_pincode }}</p>
                              </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Other Job</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->kthavchk_otherjob }}</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="mb-0">GST Name</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->kthavchk_gst_name }}</p>
                            </div>
                            <hr class="p-0 m-1">
                            <div class="col-sm-3">
                              <p class="mb-0">GST Number</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->kthavchk_gstno }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Languages</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">
                                  @if (!empty($data->kthavchk_language))
                                        @foreach(unserialize($data->kthavchk_language) as $lang)
                                            {{ last($lang) }},
                                        @endforeach
                                  @else
                                        No languages available.
                                  @endif
                              </p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Katha Types</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    {{-- {{ dd(unserialize($data->kthavchkkthavchk_katha)) }} --}}
                                    @if (!empty($data->kthavchk_katha)  && unserialize($data->kthavchk_katha))
                                        @foreach(unserialize($data->kthavchk_katha) as $lang)
                                            {{ last($lang) }},
                                        @endforeach
                                    @else
                                        No Katha Types available.
                                    @endif
                                </p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Katha Price</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->kthavchk_price }}</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="mb-0">Wallet Amount</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->kthavchk_wallet }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">About</p>
                            </div>
                            <div class="col-sm-9 fw-bold">
                              <p class="text-muted mb-0">{{ $data->kthavchk_about }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Aadhar</p>
                            </div>
                            <div class="col-sm-4 fw-bold">
                              <p class="text-muted mb-0"><img src="{{$data->kthavchk_aadharpic ?: url('assets/img/no-image.png') }}" height="170" width="200" alt=""></p>
                            </div>
                            <div class="col-sm-4 fw-bold">
                              <p class="text-muted mb-0"><img src="{{$data->kthavchk_aadharpic_back ?: url('assets/img/no-image.png') }}" height="170" width="200" alt=""></p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                        </div>
                      </div>
                    </div>
                  </div>

              </section>
        </div>
    </div>
</div>





  <!-- Modal -->
  <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Send Notifications</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('send-notification') }}" method="post">
            @csrf
            <input type="hidden" name="type" value="1">
            <input type="hidden" name="sender_id" value="{{ $data->kthavchk_id }}">
            <input type="hidden" name="fcm_token" value="{{ $data->fcm_token }}">
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Title</label>
                        <input type="text" id="nameBasic" name="title" class="form-control" placeholder="Enter Title">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="emailBasic" class="form-label">Body</label>
                        <textarea class="form-control" name="body" placeholder="Notification Body"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
      </div>
    </div>
  </div>


  <script>
  $(document).ready(function() {
    var sum = 0;
    for (var i = 1; i <= 7; i++) {
      var value = $('#complete_id' + i).text();
      var numericValue = parseFloat(value.replace('₹', '').replace(',', ''));
      sum += numericValue;
    }
    $('#received_payment').text('₹' + sum.toFixed(2));
  });
  </script>

  <script>
  $(document).ready(function() {
    var sum = 0;
    for (var i = 1; i <= 7; i++) {
      var value = $('#refund_id' + i).text();
      var numericValue = parseFloat(value.replace('₹', '').replace(',', ''));
      sum += numericValue;
    }
    $('#refund_amount').text('₹' + sum.toFixed(2));
  });
  </script>

@endsection
