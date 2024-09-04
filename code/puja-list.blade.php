<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    @include('front.headerlinking')
    <link href="{{url('front/css/pujalist.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
   
    <title>Pooja Booking Process - Pujari ji</title>
    <style>
.slider {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 40px;
    padding: 20px; /* Add padding around the slider */
}

.slider div {
    position: relative; /* Ensure position for pseudo elements */
    overflow: hidden; /* Hide overflow to contain pseudo-element */
}

.slider img {
    width: 100%;
    height: 300px; /* Fixed height for images */
    object-fit: cover; /* Maintain aspect ratio and cover container */
    border: 8px solid #ffffff; /* White border */
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3); /* Shadow effect */
    border-radius: 15px; /* Rounded corners */
    transition: transform 0.3s ease-in-out; /* Smooth hover effect */
}

.slider img:hover {
    transform: translateY(-5px); /* Move image up slightly on hover */
}

/* Pseudo-element for 3D bottom effect */
.slider div::after {
    content: '';
    position: absolute;
    bottom: -10px; /* Position at bottom, adjust as needed */
    left: 0;
    right: 0;
    height: 20px; /* Height of the 3D effect */
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 0) 100%),
                linear-gradient(to bottom, #ff6300 0%, rgba(255, 255, 255, 0) 100%); /* Gradient for 3D effect */
    transform: translateY(10px) rotateX(-2deg); /* Adjust translateY and rotation for a 3D effect */
    z-index: -1; /* Behind the image */
}


      
      </style>

  </head>


<body>
  <div class="site-wrap" style="overflow-x: hidden;">
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
      <div class="wave" style="bottom:-40px;">

          <svg width="100%" height="355px" viewbox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
              </g>
            </g>
          </svg>

          </div>

      </div>

      <div class="site-section" style="background-image: linear-gradient(to bottom, #feecdc, #fff9) !important;">
        <div class="container-fluid slider-view">
           <div class="col-md-12 d-flex justify-content-center">
              <h1 class="section-heading" style="text-align: center;">{{$messages['pujaListing']['sliderHeding']}}</h1>
            </div>
          <div class="slider">
              <div><img src="{{url('front/img/slider/puja1.jpg')}}" alt="Image 1"></div>
              <div><img src="{{url('front/img/slider/puja2.jpg')}}" alt="Image 2"></div>
              <div><img src="{{url('front/img/slider/puja4.jpg')}}" alt="Image 1"></div>
              <div><img src="{{url('front/img/slider/puja5.jpg')}}" alt="Image 2"></div>
              <div><img src="{{url('front/img/slider/puja6.jpg')}}" alt="Image 3"></div>
          </div>
        </div>
      </div>

      <div class="site-section" style="background-color: rgb(249 248 253 / #F9F8FD) !important;">
        <div class="container">
          <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
              <h1 class="section-heading">{{$messages['pujaListing']['heading']}}</h1>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
              <p style="text-align:center;">{{$messages['pujaListing']['description']}}</p>
            </div>
          </div>
          <div class="row" >
          @foreach ($data as $key =>$value)
            <div class="col-md-4">
              <div class="post-entry">
                <a href="{{ url('puja/'.$value->pooja_id) }}" class="d-block mb-4">
                  <img src="{{ $value->image }}" alt="" class="img-fluid"
                    style="border-radius: 20px; max-height:200px; min-height:200px;">
                </a>
                <div class="post-text mt-2 fw-bolder">
                  <div class="">
                    <div class="d-flex">
                      <i class="las la-calendar mr-2"></i>
                      <p class="mb-0" style="color: #737272; height: 40px; line-height: normal;">{{date('d F, l', strtotime($value->date))}}, {{ $value->tithi_name }}</p>
                    </div>
                  </div>
                  <h3 class="text-truncate w-100"><a href="{{ url('puja/'.$value->pooja_id) }}">{{ $value->name }}</a></h3>
                  <div class="">
                    <div class="d-flex mb-2">
                      <i class="las la-gopuram mr-2"></i>
                      <p class="mb-0" style="color: #737272; height: 48px;">{{ $value->mandir_address }}</p>
                    </div>
                  </div>
                  <p data-aos="fade-right" data-aos-delay="10" data-aos-offset="-1000">
                    <a href="{{ url('puja/'.$value->pooja_id) }}" class="btn btn-outline-white" style="background-color: #ff6300; color: #fff;width: 100%;
                    margin-top: 12px;">{{$messages['pujaListing']['buttonName']}}</a>
                  </p>
                  <a href="whatsapp://send?text=This is WhatsApp sharing example using link"    data-action="share/whatsapp/share"
    target="_blank"> Share to WhatsApp </a>
                </div>
              </div>
            </div>
            @endforeach    
          </div>

          <div class="row">
            <div class="col-12 d-flex justify-content-center">

              <!-- pagination html -->


              <!-- pagination html end -->

            </div>
          </div>
        </div>
      </div>

      <div class="online-pooja-process">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-12 d-flex justify-content-center">
              <h1 class="section-heading">{{$messages['pujaListing']['howItWorks']}}</h1>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <div class="step">
                <span class="number" style="color: #ff6300;">01</span>
                <h3>{{$messages['pujaListing']['choosePuja']}}</h3>
                <p>{{$messages['pujaListing']['choosePujaDesc']}}</p>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="step">
                <span class="number" style="color: #ff6300;">02</span>
                <h3>{{$messages['pujaListing']['yourInformation']}}</h3>
                <p>{{$messages['pujaListing']['yourInformationDesc']}}</p>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="step">
                <span class="number" style="color: #ff6300;">03</span>
                <h3>{{$messages['pujaListing']['pujaVideo']}}</h3>
                <p>{{$messages['pujaListing']['pujaVideoDesc']}}</p>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div class="step">
                <span class="number" style="color: #ff6300;">04</span>
                <h3> {{$messages['pujaListing']['pujaPrasad']}}</h3>
                <p>{{$messages['pujaListing']['pujaPrasadDesc']}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('front.footer')
    </main>

  </div> <!-- .site-wrap -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  @include('front.footerlinking')

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
$(document).ready(function(){
    $('.slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});

    </script>
  </body>
</html>
