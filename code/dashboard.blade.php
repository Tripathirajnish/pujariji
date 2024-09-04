@extends('admin.layout.layouts')
@section('content')
@section('title','Dashboard')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<style>
    .shadow{
        box-shadow: 0px 1px 2px 1px #ff6300 !important;
    }
</style>
{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">

    {{-- Review --}}
    <div class="card mb-1">
        <div class="row m-3">
            @if(session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Raised Query</span>
                            <a href="{{url('raised-query')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ $AppReview }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-clipboard-question fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('3') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Blogs</span>
                            <a href="{{url('blog-list')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ $blog }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-blog fs-1 field-icon Raided Query text-primary" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('3') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Pending Blogs</span>
                            <a href="{{url('pending-blog-list')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pending_blog }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-blog fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Yajman</span>
                            <a href="{{url('jajmaan')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ $jajmaan }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-users fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Language</span>
                            <a href="{{url('language')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ $language }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-language fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Banner</span>
                            <a href="{{url('app-banner')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ $banner }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-users-line fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Katha</span>
                            <a href="{{url('kathas')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ $katha }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-picture-o fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Jyotishi</span>
                            <a href="{{url('astrology')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ $astro }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-atom fs-1 field-icon Raided Query text-primary" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Pooja</span>
                            <a href="{{url('pooja-perform')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pujari }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-om fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Payment</span>
                            <a href="{{url('payment-history')}}" class="fs-3 d-block card-title text-nowrap my-2">₹{{ $total_pyament }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Total Payment">
                                <i class="fa fa-lg fa-money fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if(session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Virtual Pooja</span>
                            <a href="{{url('virtual-pooja-list')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ $total_virtual_pooja }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-om fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Virtual Pooja Payment</span>
                            <a href="#" class="fs-3 d-block card-title text-nowrap my-2">₹{{ $total_virtual_pyament }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Total Payment">
                                <i class="fa fa-lg fa-money fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Virtual Booking</span>
                            <a href="#" class="fs-3 d-block card-title text-nowrap my-2">{{ $total_virtual_booking }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Total Payment">
                                <i class="fa fa-lg fa-om fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
    {{-- </div>

    <div class="card mb-1"> --}}
        <div class="row m-3">
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('2') || session('type')==base64_encode('3') || session('type')==base64_encode('master_admin'))
            <div class="row p-3 fw-bolder text-muted">Kathavachak</div>
            @endif
            @if(session('type')==base64_encode('3') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Totak Kathavachak</span>
                            <a href="{{url('kathavachak-list')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ $kthavchak_tb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-users fs-1 field-icon Raided Query text-primary" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Pending Kathavachak</span>
                            <a href="{{url('pending-kathavachak-request')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pendingkathavachak }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa fa-person-circle-question fs-2 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Katha Earning</span>
                            <a href="{{url('total-kathas')}}" class="fs-3 d-block card-title text-nowrap my-2">₹{{ number_format($kthavchak_tbm) }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-coins fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('0'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Katha Booked</span>
                            <a href="{{url('total-kathas')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ total_kathavachak_booking('1') }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa fa-circle-check fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Katha Pending</span>
                            <a href="{{url('pending-kathas')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ total_kathavachak_booking('0') }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg bx bx-time-five fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Katha Cancelled</span>
                            <a href="{{url('rejected-kathavachak-request')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ total_kathavachak_booking('2') }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-times fs-1 field-icon Raided Query text-danger" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    {{-- </div>

    <div class="card mb-1"> --}}
        <div class="row m-3">
            @if(session('type')==base64_encode('3') || session('type')==base64_encode('0') || session('type')==base64_encode('2') || session('type')==base64_encode('3') || session('type')==base64_encode('master_admin'))
            <div class="row p-3 fw-bolder text-muted">Astrologers</div>
            @endif
            @if(session('type')==base64_encode('3') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Astrologer’s</span>
                            <a href="{{url('astrologer-list')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ $astrologer }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-users fs-1 field-icon Raided Query text-primary" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('2') || session('type')==base64_encode('3') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Pending Request</span>
                            <a href="{{url('astrologer-pending-list')}}" class="fs-3 d-block card-title text-nowrap my-2">{{ $p_astro }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-person-circle-question fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Booking Money</span>
                            <a href="{{ route('admin.completed.booking') }}" class="fs-3 d-block card-title text-nowrap my-2">₹{{ $astro_b_money }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-coins fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Booking</span>
                            <a href="{{ route('admin.completed.booking') }}" class="fs-3 d-block card-title text-nowrap my-2">₹{{ $astro_tb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-circle-check fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Pending Booking</span>
                            <a href="{{ route('admin.pending.booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $astro_pb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg bx bx-time-five fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Completed Booking</span>
                            <a href="{{ route('admin.completed.booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $astro_cb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-circle-check fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Cancelled Booking</span>
                            <a href="{{ route('admin.cancelled.booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $astro_cnb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-times fs-1 field-icon Raided Query text-danger" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Refunded Booking</span>
                            <a href="{{ route('admin.cancelled.approved.booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $astro_rb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-sack-xmark fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Astology Plan</span>
                            <a href="{{ url('astrology-plan') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $astro_pl }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-list fs-1 field-icon Raided Query text-info" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Pedning Withdraw</span>
                            <a href="{{ url('astro-withdraw-request') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $astro_pw }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg bx bx-time-five fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Completed Withdraw</span>
                            <a href="{{ url('astro-complete-withdraw') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $astro_cw }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-check-circle fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Withdraw </span>
                            <a href="{{ url('astro-complete-withdraw') }}" class="fs-3 d-block card-title text-nowrap my-2">₹{{ $astro_tw }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-check-circle fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    {{-- </div>

    <div class="card mb-1"> --}}
        <div class="row m-3">
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="row p-3 fw-bolder text-muted">Kundali</div>
            @endif
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Booking</span>
                            <a href="{{ url('complete-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $kundali_tb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-circle-check fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Pending Booking</span>
                            <a href="{{ url('pending-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $kundali_pb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg bx bx-time-five fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Completed Booking</span>
                            <a href="{{ url('complete-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $kundali_cb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-circle-check fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Booking Money</span>
                            <a href="{{ url('complete-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">₹{{ $kundali_bm }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-coins fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    {{-- </div>




    <div class="card mb-1"> --}}
        <div class="row m-3">
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="row p-3 fw-bolder text-muted">Muhurt</div>
            @endif
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Booking</span>
                            <a href="{{ url('muhurt-complete-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $muhurt_tb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-circle-check fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Pending Booking</span>
                            <a href="{{ url('muhurt-pending-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $muhurt_pb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg bx bx-time-five fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Completed Booking</span>
                            <a href="{{ url('muhurt-complete-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $muhurt_cb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-circle-check fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Booking Money</span>
                            <a href="{{ url('muhurt-complete-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">₹{{ $muhurt_bm }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-coins fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    {{-- </div>

    <div class="card mb-1"> --}}
        <div class="row m-3">
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
            <div class="row p-3 fw-bolder text-muted">Temple Bookings</div>
            @endif
            @if(session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Temple</span>
                            <a href="{{ url('temple-list') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $temple }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-gopuram fs-1 field-icon Raided Query text-danger" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Temple Pooja</span>
                            <a href="{{ url('temple-pooja-list') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $temple_pooja }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-om fs-1 field-icon Raided Query text-info" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Offline Pooja Money</span>
                            <a href="{{ url('temple-offline-completed-pooja') }}" class="fs-3 d-block card-title text-nowrap my-2">₹{{ $temple_offpm }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-coins fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Online Pooja Money</span>
                            <a href="{{ url('temple-online-completed-pooja') }}" class="fs-3 d-block card-title text-nowrap my-2">₹{{ $temple_onpm }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-coins fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Online Pending Pooja</span>
                            <a href="{{ url('temple-online-pending-pooja') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $temple_opp }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg bx bx-time-five fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Online Complete Pooja</span>
                            <a href="{{ url('temple-online-complete-pooja') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $temple_ocp }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-check-circle bx bx-time-five fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Online Cancelled Pooja</span>
                            <a href="{{ url('temple-online-cancelled-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $temple_orp }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-check-circle bx bx-time-five fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Offline Pending Pooja</span>
                            <a href="{{ url('temple-offline-pending-pooja') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $temple_ofpp }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg bx bx-time-five fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Offline Complete Pooja</span>
                            <a href="{{ url('temple-offline-completed-pooja') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $temple_ofcp }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-check-circle fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Offline Cancel Pooja</span>
                            <a href="{{ url('temple-offline-cancelled-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $temple_ofrp }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg bx bx-time-five fs-1 field-icon Raided Query text-danger" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
    {{-- </div>

    <div class="card mb-1"> --}}
        <div class="row m-3">
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="row p-3 fw-bolder text-muted">Ecommerce</div>
            @endif
            @if(session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Products</span>
                            <a href="{{ url('products') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $ecom_product }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-list fs-1 field-icon Raided Query text-info" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Delivered Orders</span>
                            <a href="{{ url('delivered-order') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $ecom_order }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fas fa-cart-plus fs-1 field-icon Raided Query text-info" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Pending Orders</span>
                            <a href="{{ url('pending-order') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $ecom_po }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg bx bx-time-five fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Cancelled Orders</span>
                            <a href="{{ url('cancelled-order') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $ecom_co }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-times fs-1 field-icon Raided Query text-danger" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Sell</span>
                            <a href="{{ url('delivered-order') }}" class="fs-3 d-block card-title text-nowrap my-2">₹{{ $ecom_ts }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-coins fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    {{-- </div>

    <div class="card mb-1"> --}}
        <div class="row m-3">
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
            <div class="row p-3 fw-bolder text-muted">Event Pooja</div>
            @endif
            @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Event</span>
                            <a href="{{ url('event') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $event_pooja }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-list fs-1 field-icon Raided Query text-info" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('1') || session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Pending Booking</span>
                            <a href="{{ url('event-pending-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $event_pb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg bx bx-time-five fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Complete Booking</span>
                            <a href="{{ url('event-complete-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $event_booking }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-circle-check fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Event Earning</span>
                            <a href="{{ url('event-complete-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">₹{{ number_format($event_earning) }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-coins fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
    {{-- </div>

    <div class="card mb-1"> --}}
        <div class="row m-3">
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('3') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="row p-3 fw-bolder text-muted">Pooja Booking</div>
            @endif
            @if(session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Pooja</span>
                            <a href="{{ url('pooja-list') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pooja }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-list fs-1 field-icon Raided Query text-info" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Package</span>
                            <a href="{{ url('package-list') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $package }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-list fs-1 field-icon Raided Query text-info" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Material</span>
                            <a href="{{ url('pooja-material') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $material }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-list fs-1 field-icon Raided Query text-info" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Inclusions</span>
                            <a href="{{ url('inclusion-list') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $inclusions }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-list fs-1 field-icon Raided Query text-info" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('3') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Pujari</span>
                            <a href="{{ url('pujariji-list') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pooja_pujari }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-users fs-1 field-icon Raided Query text-primary" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Pending Pujari</span>
                            <a href="{{ url('pending-pujariji-list') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pooja_pp }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-person-circle-question fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Rejected Pujari</span>
                            <a href="{{ url('rejected-pujariji-list') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pooja_rp }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-lg fa-times fs-1 field-icon Raided Query text-danger" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Online Earning</span>
                            <a href="{{ url('online-completed-pooja') }}" class="fs-3 d-block card-title text-nowrap my-2">₹{{ $pooja_oe }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-coins fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Offline Earning</span>
                            <a href="{{ url('offline-completed-pooja') }}" class="fs-3 d-block card-title text-nowrap my-2">₹{{ $pooja_offe }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-coins fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Online Pending Booking</span>
                            <a href="{{ url('online-pending-pooja') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pooja_onpb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg  bx bx-time-five fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Online Booking</span>
                            <a href="{{ url('online-completed-pooja') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pooja_ob }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg bx bx-world fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Offline Booking</span>
                            <a href="{{ url('offline-completed-pooja') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pooja_offb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg bx bxs-select-multiple fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Offline Pending Booking</span>
                            <a href="{{ url('offline-pending-pooja') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pooja_ofpb }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg  bx bx-time-five fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Online Cancel Request</span>
                            <a href="{{ url('online-cancelled-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pooja_ocr }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-times fs-1 field-icon Raided Query text-danger" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Online Refunded</span>
                            <a href="{{ url('online-completed-cancelled-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pooja_orf }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-times fs-1 field-icon Raided Query text-danger" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Offline Cancel Request</span>
                            <a href="{{ url('offline-cancelled-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pooja_offcr }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-times fs-1 field-icon Raided Query text-danger" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Offline Refund</span>
                            <a href="{{ url('offline-completed-cancelled-booking') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pooja_offrf }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-times fs-1 field-icon Raided Query text-danger" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            @endif
            @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Pedning Withdraw</span>
                            <a href="{{ url('withdraw-request') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pooja_pw }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg bx bx-time-five fs-1 field-icon Raided Query text-warning" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Completed Withdraw</span>
                            <a href="{{ url('complete-withdraw') }}" class="fs-3 d-block card-title text-nowrap my-2">{{ $pooja_cw }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-check-circle fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6 mb-4">
                <div class="card-body rounded shadow">
                    <div class="card-title d-flex align-items-start justify-content-between m-0 p-0">
                        <div class="">
                            <span class="fs-6">Total Withdraw </span>
                            <a href="{{ url('complete-withdraw') }}" class="fs-3 d-block card-title text-nowrap my-2">₹{{ $pooja_tw }}</a>
                        </div>
                        <div class="mt-3">
                            <span  class="icon-sec pwd" toggle="#Raised Query">
                                <i class="fa fa-lg fa-check-circle fs-1 field-icon Raided Query text-success" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    {{-- </div> --}}




</div>




@endsection
