<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.headerlinking')
    <title>Pooja Feedback Process - Pujari ji</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <div class="site-wrap" style=" overflow-x: hidden;">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icofont-close js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        @include('front.header')


        <main id="main">
            <div class="site-section pb-0">
                <div class="container">
                    <div class="row align-items-center my-5 align-self-center">
                        <div class="col-md-12 mr-auto">
                            <div class="container-fluid">
                                <div class="reviews">
                                    <div class="col-md-8 col-sm-12 div-brdr">
                                    <form action="{{ route('payment.initiate') }}" id="feedback-form" method="POST">
                                    @csrf
                                        <h5>{{$detail->name}}</h5>
                                        <p>{{$package->name}}</p>
                                        <p style="color: #000;">₹{{$booking->total_price}}</p>
                                        <div class="mt-3">
                                            <div class="d-flex align-items-center mb-2">
                                                <i class="las la-gopuram mr-2"></i>
                                                <p class="mb-0" style="color: #737272;">
                                                    {{$mandir->title}}</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="las la-calendar mr-2"></i>
                                                <p class="mb-0" style="color: #737272;">{{date('d F, l',strtotime($booking->pooja_date))}}, {{$detail->tithi_name}}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="input my-2">
                                            <div class="stars">
                                                <div class="star1"><i class="far fa-star starj1"></i></div>
                                                <div class="star2"><i class="far fa-star starj2"></i></div>
                                                <div class="star3"><i class="far fa-star starj3"></i></div>
                                                <div class="star4"><i class="far fa-star starj4"></i></div>
                                                <div class="star5"><i class="far fa-star starj5"></i></div>
                                            </div>
                                        </div>

                                        <div class="inputbox">
                                            <textarea type="text" class="reviewinp" placeholder="Write a review"
                                                rows="5" style="height: 200px;"></textarea>
                                        </div>

                                        <div class="names">
                                            <input type="file" class="firstname" placeholder="Messgae">
                                        </div>

                                        <div class="submitbtn mt-3">
                                            <button class="submit">Submit Review</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                            </div>

                            <script src="https://kit.fontawesome.com/850830ed04.js" crossorigin="anonymous"></script>
                        </div>

                    </div>
                </div>
            </div> <!-- .site-section -->

        </main>
        @include('front.footer')
    </div> <!-- .site-wrap -->

    <!-- Vendor JS Files -->
    @include('front.footerlinking')
</body>
</html>
