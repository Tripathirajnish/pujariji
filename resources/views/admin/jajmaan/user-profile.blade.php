@extends('admin.layout.layouts')
@section('title', $jajmaan->name . ' ' . $jajmaan->surname . ' Profile')
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
                      <div class="card mb-4">
                        <div class="card-body text-center">
                          <img src="{{ $jajmaan->image ?: url('/assets/img/avatars/blank_avatar_image.png') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height:150px;">
                          <h4 class="my-3">{{ $jajmaan->name.' '.$jajmaan->surname }}</h4>
                          <p class="text-muted mb-1 fw-bold">Profile Status : <span class="text-success">Active</span></p>
                          <p class="text-muted mb-1">Registration Date : {{ $jajmaan->date }}</p>
                          <p class="text-muted mb-4 fw-bolder">Registration ID : {{ $jajmaan->jajmaan_id }}</p>
                          <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Send Notification</button>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                          <p class="mb-0 fw-bold">Completed Booking</p>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                            <span>Katha Booking</span>
                            <p class="mb-0 fw-bold">{{ jajmaan_booking_by_model('KathavachakBooking',$jajmaan->jajmaan_id) }}</p>
                          </div>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                            <span>Astrology Booking</span>
                            <p class="mb-0 fw-bold">{{ jajmaan_booking_by_model('AstrologerBooking',$jajmaan->jajmaan_id) }}</p>
                          </div>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                            <span>Temple Booking</span>
                            <p class="mb-0 fw-bold">{{ jajmaan_booking_by_model('TemplePoojaBooking',$jajmaan->jajmaan_id) }}</p>
                          </div>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                            <span>Pooja Booking</span>
                            <p class="mb-0 fw-bold">{{ jajmaan_booking_by_model('PoojaBooking',$jajmaan->jajmaan_id) }}</p>
                          </div>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                            <span>Event Booking</span>
                            <p class="mb-0 fw-bold">{{ jajmaan_booking_by_model('EventBooking',$jajmaan->jajmaan_id) }}</p>
                          </div>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                            <span>Kundali Booking</span>
                            <p class="mb-0 fw-bold">{{ jajmaan_booking_by_model('KundaliBooking',$jajmaan->jajmaan_id) }}</p>
                          </div>

                          <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                            <span>Product Buy</span>
                            <p class="mb-0 fw-bold">{{ jajmaan_booking_by_model('EcommerceOrderProduct',$jajmaan->jajmaan_id) }}</p>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="card mb-4">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Yajman Name</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $jajmaan->name.' '.$jajmaan->surname }}</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $jajmaan->phone }}</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Horoscope</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $jajmaan->horoscope }}</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Gender</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $jajmaan->gender=='0'?'Male':($jajmaan->gender=='1'?'Female':'Other') }}</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $jajmaan->address }}</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">City</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $jajmaan->city }}</p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">State</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0">{{ $jajmaan->state }}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="d-flex justify-content-between mb-0 fw-bold">
                                    <span>Received Payments</span>
                                    <span class="text-success" id="received_payment"></span>
                                </p>

                                <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                                  <span>Katha Booking</span>
                                  <p class="mb-0 fw-bold" id="complete_id1">₹{{ jajmaan_booking_complete_payment_by_model('KathavachakBooking','total_price',$jajmaan->jajmaan_id) }}</p>
                                </div>

                                <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                                  <span>Astrology Booking</span>
                                  <p class="mb-0 fw-bold" id="complete_id2">₹{{ jajmaan_booking_complete_payment_by_model('AstrologerBooking','plan_price',$jajmaan->jajmaan_id) }}</p>
                                </div>

                                <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                                  <span>Temple Booking</span>
                                  <p class="mb-0 fw-bold" id="complete_id3">₹{{ jajmaan_booking_complete_payment_by_model('TemplePoojaBooking','total_price',$jajmaan->jajmaan_id) }}</p>
                                </div>

                                <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                                  <span>Pooja Booking</span>
                                  <p class="mb-0 fw-bold" id="complete_id4">₹{{ jajmaan_booking_complete_payment_by_model('PoojaBooking','total_price',$jajmaan->jajmaan_id) }}</p>
                                </div>

                                <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                                  <span>Event Booking</span>
                                  <p class="mb-0 fw-bold" id="complete_id5">₹{{ jajmaan_booking_complete_payment_by_model('EventBooking','event_price',$jajmaan->jajmaan_id) }}</p>
                                </div>

                                <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                                  <span>Kundali Booking</span>
                                  <p class="mb-0 fw-bold" id="complete_id6">₹{{ jajmaan_booking_complete_payment_by_model('KundaliBooking','total',$jajmaan->jajmaan_id) }}</p>
                                </div>

                                <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                                  <span>Product Buy</span>
                                  <p class="mb-0 fw-bold" id="complete_id7">₹{{ jajmaan_booking_complete_payment_by_model('EcommerceOrderProduct','total_amt',$jajmaan->jajmaan_id) }}</p>
                                </div>

                              </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="d-flex justify-content-between mb-0 fw-bold">
                                    <span>Refund Payments</span>
                                    <span class="text-danger" id="refund_amount"></span>
                                </p>

                                <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                                    <span>Katha Booking</span>
                                    <p class="mb-0 fw-bold" id="refund_id1">₹{{ jajmaan_booking_refund_payment_by_model('KathavachakBooking','total_price',$jajmaan->jajmaan_id) }}</p>
                                  </div>

                                  <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                                    <span>Astrology Booking</span>
                                    <p class="mb-0 fw-bold" id="refund_id2">₹{{ jajmaan_booking_refund_payment_by_model('AstrologerBooking','plan_price',$jajmaan->jajmaan_id) }}</p>
                                  </div>

                                  <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                                    <span>Temple Booking</span>
                                    <p class="mb-0 fw-bold" id="refund_id3">₹{{ jajmaan_booking_refund_payment_by_model('TemplePoojaBooking','total_price',$jajmaan->jajmaan_id) }}</p>
                                  </div>

                                  <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                                    <span>Pooja Booking</span>
                                    <p class="mb-0 fw-bold" id="refund_id4">₹{{ jajmaan_booking_refund_payment_by_model('PoojaBooking','total_price',$jajmaan->jajmaan_id) }}</p>
                                  </div>

                                  <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                                    <span>Event Booking</span>
                                    <p class="mb-0 fw-bold" id="refund_id5">₹{{ jajmaan_booking_refund_payment_by_model('EventBooking','event_price',$jajmaan->jajmaan_id) }}</p>
                                  </div>

                                  <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                                    <span>Kundali Booking</span>
                                    <p class="mb-0 fw-bold" id="refund_id6">₹{{ jajmaan_booking_refund_payment_by_model('KundaliBooking','total',$jajmaan->jajmaan_id) }}</p>
                                  </div>

                                  <div class="d-flex justify-content-between align-items-center border-bottom p-3 pb-0">
                                    <span>Product Buy</span>
                                    <p class="mb-0 fw-bold" id="refund_id7">₹{{ jajmaan_booking_refund_payment_by_model('EcommerceOrderProduct','total_amt',$jajmaan->jajmaan_id) }}</p>
                                  </div>


                              </div>
                          </div>
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
            <input type="hidden" name="sender_id" value="{{ $jajmaan->jajmaan_id }}">
            <input type="hidden" name="fcm_token" value="{{ $jajmaan->fcm_token }}">
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Title</label>
                        <input type="text" id="nameBasic" name="title" class="form-control" placeholder="Enter Title">
                    </div>
                </div>
                {{-- <div class="row g-2">
                    <div class="col mb-3">
                        <label for="nameBasic" class="form-label">Image</label>
                        <input type="file" id="nameBasic" name="image" class="form-control" placeholder="Image">
                    </div>
                </div> --}}
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
