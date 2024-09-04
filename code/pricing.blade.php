<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.headerlinking')
    <title>Pricing - Pujari ji</title>
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
            <div class="hero-section inner-page">
                <div class="wave">

                    <svg width="1920px" height="265px" viewbox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                                <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
                            </g>
                        </g>
                    </svg>

                </div>

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-md-7 text-center hero-text">
                                    <h1 data-aos="fade-up" data-aos-delay="">Our Pricing</h1>
                                    <!-- <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>   -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <div class="site-section">
                <div class="container">

                    <div class="row justify-content-center text-center">
                        <div class="col-md-7 mb-5">
                            <h2 class="section-heading">Choose A Astrology Plan</h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere illum obcaecati inventore velit laborum earum.</p> -->
                        </div>
                    </div>
                    <div class="row align-items-stretch">

                    @foreach($plans as $plan)
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="pricing h-100 text-center">
                                <h3>{{ $plan->plan_name }}</h3>
                                <ul class="list-unstyled">
                                    <li style="font-size: 24px; ">{{ $plan->sutitle }}</li>

                                </ul>
                                <div class="price-cta">
                                    <strong class="price"> ₹{{ $plan->price }}</strong>
                                    <p><a href="https://play.google.com/store/apps/details?id=com.app.pujari_ji&pcampaignid=web_share" class="btn btn-white" id="#downloadlink">Download Now</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach





                        {{-- <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="pricing h-100 text-center popular">
                                <span class="popularity"></span>
                                <h3>Standard</h3>
                                <ul class="list-unstyled">
                                    <li style="font-size: 24px; ">20 Minutes Phone Consultation</li>
                                </ul>
                                <div class="price-cta">
                                    <strong class="price"> ₹1000</strong>
                                    <p><a href="mobileapp.html" class="btn btn-white" id="#downloadlink">Download Now</a></p>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="pricing h-100 text-center">
                                <span>&nbsp;</span>
                                <h3>Super</h3>
                                <ul class="list-unstyled">
                                    <li style="font-size: 24px; ">40 Minutes Phone Consultation</li>
                                </ul>
                                <div class="price-cta">
                                    <strong class="price"> ₹2100</strong>
                                    <p><a href="mobileapp.html" class="btn btn-white" id="downloadlink">Download Now</a></p>
                                </div>
                            </div>
                        </div> --}}


                    </div>
                </div>
            </div>









        </main>
        @include('front.footer')
    </div> <!-- .site-wrap -->

    <!-- Vendor JS Files -->
    @include('front.footerlinking')

</body>
</html>
