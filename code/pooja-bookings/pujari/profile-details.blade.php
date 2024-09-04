@extends('admin.layout.layouts')
@section('title', $data->name . ' ' . $data->surname . ' Profile')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <section style="background-color: #eee;" class="container py-3">

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card mb-1">
                        <div class="card-body text-center">
                          <img src="{{ $data->pujari_image ?: url('assets/img/no-image.png')  }}" alt="avatar" class="rounded-circle img-fluid" style="width: 100px; height:100px;">
                          <h6 class="my-1">{{ ucwords($data->name.' '.$data->surname) }} <br>s/o {{ $data->father_name }}</h4>
                            <p class="text-muted mb-1 fw-bold">Profile Status : <span class="text-{{ $data->status=='0'?'success':'danger' }}">{{ $data->status=='0'?'Active':'Inavtive' }}</span></p>
                            <p class="text-muted mb-1"><span class="fw-bolder">Registration ID :</span> {{ $data->pujari_id }}</p>

                            <p class="text-muted mb-1"><span class="fw-bolder">Phone :</span>
                                <span class="m-2 small">
                                    <i class="bx bx-mobile text-primary"></i>{{ $data->phone_number }},
                                    <i class="fa fa-whatsapp text-success fs-5"></i>{{ $data->whatsapp_number }}
                                </span>
                            </p>
                            <p class="text-muted mb-0">Member Since : {{ date('d-m-Y',strtotime($data->created_at)) }}</p>
                          <div class="d-flex justify-content-center mb-0">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Send Notification</button>
                          </div>
                        </div>
                      </div>
                      @if($data->verification=='0')
                      <div class="card mb-1 small">
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

                      <div class="card mb-1 small">
                        <div class="card-body p-2">
                          <p class="mb-0 fw-bold">Earnings</p>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-1 pb-0">
                            <span class="ms-4">Total</span>
                            <p class="mb-0 me-3 fw-bold">{{ $total_earn }}</p>
                          </div>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-1 pb-0">
                            <span class="ms-4">Cash</span>
                            <p class="mb-0 me-3 fw-bold">{{ $cash }}</p>
                          </div>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-1 pb-0">
                            <span class="ms-4">Online</span>
                            <p class="mb-0 me-3 fw-bold">{{ $online }}</p>
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
                              <p class="text-muted mb-0">{{ $data->date_of_birth }}</p>
                            </div>
                            <div class="col-sm-3">
                                <p class="mb-0">Gender</p>
                              </div>
                              <div class="col-sm-3">
                                <p class="text-muted mb-0">{{ $data->gender=='0'?'Male':($data->gender=='1'?'Female':'Other') }}</p>
                              </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Education</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $data->education }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $data->address }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Village/Flat</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->village_or_flat_no }}</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="mb-0">Post</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->post }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Police Station</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->police_station }}</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="mb-0">City</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->city }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">State</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->state }}</p>
                            </div>
                            <div class="col-sm-3">
                                <p class="mb-0">Pincode</p>
                              </div>
                              <div class="col-sm-3">
                                <p class="text-muted mb-0">{{ $data->pincode }}</p>
                              </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Other Job</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->other_job }}</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="mb-0">GST</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->gst }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Languages</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">

                                    @foreach(unserialize($data->list_languages) as $languages)
                                      @if (!empty($languages))
                                            {{-- @foreach($languages as $lang) --}}
                                                {{ last($languages) }},
                                            {{-- @endforeach --}}
                                        @else
                                            No languages available.
                                            @php
                                                break;
                                            @endphp
                                        @endif
                                     @endforeach
                                </p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Pooja Types</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">

                                    @foreach(unserialize($data->list_perform_pooja) as $perform)
                                      @if (!empty($perform))
                                            {{-- @foreach($perform as $pooja) --}}
                                                {{ last($perform) }},
                                            {{-- @endforeach --}}
                                        @else
                                            No Pooja available.
                                            @php
                                            break;
                                        @endphp
                                        @endif
                                    @endforeach
                                </p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row mx-2">
                            <div class="col-sm-3">
                              <p class="mb-0">GST Name</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->gst_name }}</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="mb-0">GST Number</p>
                            </div>
                            <div class="col-sm-3">
                              <p class="text-muted mb-0">{{ $data->gst_number }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row mx-2">
                            <div class="col-sm-3">
                              <p class="mb-0">Pooja Preference</p>
                            </div>
                            <div class="col-sm-3 fw-bold">
                              <p class="text-muted mb-0">{{ $data->online_or_offline=='0'?'Online':'Offline' }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row mx-2">
                            <div class="col-sm-3">
                              <p class="mb-0">About</p>
                            </div>
                            <div class="col-sm-9 fw-bold">
                              <p class="text-muted mb-0">{{ $data->about }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row mx-2">
                            <div class="col-sm-3">
                              <p class="mb-0">Temple Name</p>
                            </div>
                            <div class="col-sm-3 fw-bold">
                              <p class="text-muted mb-0">{{ $data->temple_name }}</p>
                            </div>
                            <div class="col-sm-3 fw-bold">
                              <p class="text-muted mb-0">Wallet Amount</p>
                            </div>
                            <div class="col-sm-3 fw-bold">
                              <p class="text-muted mb-0">{{ $data->wallet_amt }}</p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                          <div class="row mx-2">
                            <div class="col-sm-3">
                              <p class="mb-0">Aadhar</p>
                            </div>
                            <div class="col-sm-4 fw-bold">
                              <p class="text-muted mb-0">Front <img src="{{$data->adhar_front_image ?: url('assets/img/no-image.png') }}" height="100" width="100" alt=""></p>
                            </div>
                            <div class="col-sm-4 fw-bold">
                              <p class="text-muted mb-0">Back <img src="{{$data->adhar_back_image ?: url('assets/img/no-image.png') }}" height="100" width="100" alt=""></p>
                            </div>
                          </div>
                          <hr class="p-0 m-1">
                        </div>
                      </div>
                      @if($data->verification=='0')
  
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
            <input type="hidden" name="sender_id" value="{{ $data->pujari_id }}">
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
