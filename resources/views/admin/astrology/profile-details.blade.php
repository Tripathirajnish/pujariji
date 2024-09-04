@extends('admin.layout.layouts')
@section('title', $astro->astro_name . ' ' . $astro->astro_surname . ' Profile')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <section style="background-color: #eee;" class="container py-3">

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card mb-4">
                        <div class="card-body text-center">
                          <img src="{{ $astro->astro_image ?: url('assets/img/no-image.png') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height:150px;">
                          <h6 class="my-3">{{ ucwords($astro->astro_name.' '.$astro->astro_surname) }} <br>s/o {{ $astro->astro_father ?? '' }}</h4>
                            <p class="text-muted mb-1 fw-bold">Profile Status : <span class="text-success">Active</span></p>
                            <p class="text-muted mb-1"><span class="fw-bolder">Registration ID :</span> {{ $astro->astro_id }}</p>

                            <p class="text-muted mb-1"><span class="fw-bolder">Phone :</span>
                                <span class="m-2 small">
                                    <i class="bx bx-mobile text-primary"></i>{{ $astro->astro_phone ?? ''  }},
                                    <i class="fa fa-whatsapp text-success fs-5"></i>{{ $astro->astro_whatsapp ?? ''  }}
                                </span>
                            </p>
                            <p class="text-muted mb-4">Member Since : {{ date('d-m-Y',strtotime($astro->created_at)) }}</p>
                          <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Send Notification</button>
                          </div>
                        </div>
                      </div>
                      @if($astro->verification=='0')
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
                            <span class="ms-4">Received</span>
                            <p class="mb-0 me-3 fw-bold">{{ $collected }}</p>
                          </div>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-1 pb-0">
                            <span class="ms-4">Pending</span>
                            <p class="mb-0 me-3 fw-bold">{{ $pending }}</p>
                          </div>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-1 pb-0">
                            <span class="ms-4">Cancelled</span>
                            <p class="mb-0 me-3 fw-bold">{{ $cancelled }}</p>
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
                              <p class="text-muted mb-0">{{ $astro->astro_dob }}</p>
                            </div>
                            <div class="col-sm-3">
                                <p class="mb-0">Gender</p>
                              </div>
                              <div class="col-sm-3">
                                <p class="text-muted mb-0">{{ $astro->astro_gender=='0'?'Male':($astro->astro_gender=='1'?'Female':'Other') }}</p>
                              </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Education</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $astro->astro_education }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $astro->astro_address }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Village/Flat</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $astro->astro_vill_flat }}</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="mb-0">Post</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $astro->astro_post }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Police Station</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $astro->astro_police_station }}</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="mb-0">City</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $astro->astro_city }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">State</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $astro->astro_state }}</p>
                            </div>
                            <div class="col-sm-3">
                                <p class="mb-0">Pincode</p>
                              </div>
                              <div class="col-sm-3">
                                <p class="text-muted mb-0">{{ $astro->astro_pincode }}</p>
                              </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Other Job</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $astro->astro_other_job }}</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="mb-0">GST</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $astro->astro_gst }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Languages</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">
                                  @foreach(unserialize($astro->astro_jyotish_language) as $lang)
                                  @if (!empty($languages))
                                        @foreach($languages as $lang)
                                            {{ last($lang) }},
                                        @endforeach
                                    @else
                                        No languages available.
                                    @endif
                                  @endforeach
                              </p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Astrology Types</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                  @foreach(unserialize($astro->astro_types) as $type)
                                    {{ last($type) }},
                                  @endforeach
                                </p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Slot</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $astro->astro_slot }}</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="mb-0">Astrology Price</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">₹{{ $astro->astro_price }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Final Price<br><small>(Set by Pujari Ji Admin)</small></p>
                            </div>
                            <div class="col-sm-3 fw-bold">
                              <p class="text-muted mb-0">₹{{ $astro->astro_final_price }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Wallet Amount</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">₹{{ $astro->astro_wallet }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">About</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0 blockquote"></p>
                              <figure>
                                <blockquote class="blockquote">
                                  <p class="small">{{ $astro->astro_about }}</p>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                  About <cite title="Astrologer">Astrologer</cite>
                                </figcaption>
                              </figure>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Aadhar</p>
                            </div>
                            <div class="col-sm-4 fw-bold">
                              <p class="text-muted mb-0">Front <img src="{{$astro->astro_aadhar_pic ?: url('assets/img/no-image.png') }}" height="100" width="100" alt=""></p>
                            </div>
                            <div class="col-sm-4 fw-bold">
                              <p class="text-muted mb-0">Back <img src="{{$astro->astro_aadhar_back_pic ?: url('assets/img/no-image.png') }}" height="100" width="100" alt=""></p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                            <h4>Account Details</h4>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Account Type</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $astro_ac !== null ? ($astro_ac->astro_type=='0' ? 'Saving' : 'Current') : '' }}
                              </p>
                            </div>
                            <div class="col-sm-3">
                              <p class="mb-0">Account Holder</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $astro_ac->astro_ac_holder ?? ''  }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Account Number</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $astro_ac->astro_ac_num ?? ''  }}</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="mb-0">IFSC</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $astro_ac->astro_ifsc ?? ''  }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">


                        </div>
                      </div>
                      @if($astro->verification=='0')

                      @endif
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
            <input type="hidden" name="sender_id" value="{{ $astro->astro_id }}">
            <input type="hidden" name="fcm_token" value="{{ $astro->fcm_token }}">
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
