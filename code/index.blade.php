<!DOCTYPE html>
<html lang="en">

<head>
@include('front.headerlinking')
<link href="{{url('front/css/custom.css')}}" rel="stylesheet">
<link href="{{url('front/css/pujalist.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<title>Pujari ji</title>
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
      <div class="hero-section">
        <div class="wave" style="bottom:0px;">

          <svg width="100%" height="250px" viewbox="0 0 1920 250" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
              </g>
            </g>
          </svg>

        </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 hero-text-image">
              <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                  <h1 data-aos="fade-right" style="font-size:3rem;">{{$messages['home']['welcome']}}</h1>
                  <p class="mb-5" data-aos="fade-right" data-aos-delay="100">{{$messages['home']['description']}}</p>
                  <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.app.pujari_ji&pcampaignid=web_share" class="btn" style="background-color: #333;color: #fff;"><span class="icofont-ui-play mr-3"></span>Download Now</a></p>
                </div>
                <div class="col-lg-5 iphone-wrap">
                  <img src="{{url('front/img/2.png')}}" alt="Image" class="phone-1" data-aos="fade-right">
                  <img src="{{url('front/img/FHGGK.png')}}" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <section>
        <div class="container-fluid slider-view mb-5">
        <div class="col-md-12 d-flex justify-content-center">
              <h1 class="section-heading">{{$messages['home']['pujaSliderHeading']}}</h1>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
              <p style="text-align:center;">{{$messages['home']['pujaSliderDescription']}}</p>
            </div>
          
                <div class="slider">
                  @foreach ($data as $key =>$value) 
                  <div>
                     <div class="post-entry">
                        <a href="{{ url('puja/'.$value->pooja_id) }}" class="d-block mb-4">
                          <img src="{{ $value->image }}" alt="" class="img-fluid"
                            style="border-radius: 20px; max-height:200px; min-height:200px; width:100%;">
                        </a>
                        <div class="post-text mt-2 fw-bolder">
                          <div class="">
                            <div class="d-flex">
                              <i class="las la-calendar mr-2"></i>
                              <p class="mb-0" style="color: #737272; margin:0 !important;">{{date('d F, l', strtotime($value->date))}}, {{ $value->tithi_name }}</p>
                            </div>
                          </div>
                          <h3 class="text-truncate w-100"><a href="{{ url('puja/'.$value->pooja_id) }}">{{ $value->name }}</a></h3>
                          <div class="">
                            <div class="d-flex mb-2">
                              <i class="las la-gopuram mr-2"></i>
                              <p class="mb-0" style="color: #737272; height: 48px; margin:0 !important;">{{ $value->mandir_address }}</p>
                            </div>
                          </div>
                          <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                            <a href="{{ url('puja/'.$value->pooja_id) }}" class="btn btn-outline-white" style="background-color: #ff6300; color: #fff;width: 100%;
                            margin-top: 12px;">{{$messages['pujaListing']['buttonName']}}</a>
                          </p>
                        </div>
                      </div>
                  </div>
               @endforeach
             
          </div>
        </div>
      </section>


      <div class="site-section" style="background-image: linear-gradient(to bottom, #feecdc, #fff9) !important;">
        <div class="container">

          <div class="row justify-content-center text-center mb-5 pt-3">
            <div class="col-md-5" data-aos="fade-up">
              <h2 class="section-heading">{{$messages['home']['pujariHeading']}}</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <img src="{{url('front/img/pooja (3).png')}}" alt="" style="width: 70px; height: 70px; margin-top: 10px;">
                </div>
                <h3 class="mb-3">{{$messages['home']['service1']}}</h3>
                <p>{{$messages['home']['service1Description']}}</p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <img src="{{url('front/img/solar-system.png')}}" alt="" style="width: 70px; height: 70px; margin-top: 15px;">
                </div>
                <h3 class="mb-3">{{$messages['home']['service2']}}</h3>
                <p>{{$messages['home']['service2Description']}}</p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <img src="{{url('front/img/pooja (3).png')}}" alt="" style="width: 70px; height: 70px; margin-top: 15px;">
                </div>
                <h3 class="mb-3">{{$messages['home']['service3']}}</h3>
                <p>{{$messages['home']['service3Description']}}</p>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- .site-section -->

      <div class="site-section mb-5" style="background-color: rgb(249 248 253 / #F9F8FD) !important;">
        <div class="container">
          <div class="row justify-content-center text-center mb-5" data-aos="fade">
            <div class="col-md-6 mb-5">
              <img src="{{url('front/img/1.svg')}}" alt="Image" class="img-fluid" style="width: 900px;">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="step">
                <span class="number" style="color: #ff6300;">01</span>
                <h3>{{$messages['home']['signUp']}}</h3>
                <p>{{$messages['home']['signUpDescription']}}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="step">
                <span class="number" style="color: #ff6300;">02</span>
                <h3>{{$messages['home']['profile']}}</h3>
                <p>{{$messages['home']['profileDescription']}}</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="step">
                <span class="number" style="color: #ff6300;">03</span>
                <h3>{{$messages['home']['enjoyApp']}}</h3>
                <p>{{$messages['home']['enjoyAppDescription']}}</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->



      <div class="site-section pb-5" style="background-image: linear-gradient(to bottom, #feecdc, #fff9) !important;">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 mr-auto">
              <h2 class="mb-4">{{$messages['home']['commonHeading1']}}</h2>
              <p class="mb-4">{{$messages['home']['commonDescripton1']}}</p>

            </div>
            <div class="col-md-6" data-aos="fade-left">
              <img src="{{url('front/img/po/1.png')}}" alt="Image" class="img-fluid" style="height: 600px; margin-left: 20px;" >
              <!-- <img src="{{url('front/img/po/1.svg')}}" alt="Image" class="img-fluid" style="width: 100% !important; height: auto !important;"> -->

            </div>
          </div>
        </div>
      </div> <!-- .site-section -->

      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 ml-auto order-2">
              <h2 class="mb-4" style="margin-top: 50px;">{{$messages['home']['commonHeading2']}}</h2>
              <p class="mb-4">{{$messages['home']['commonDescription2']}}</p>

            </div>
            <div class="col-md-6" data-aos="fade-right">
              <img src="{{url('front/img/feature/2.png')}}" alt="Image" class="img-fluid" style="height: 600px; margin-left: 20px;" >
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->


@include('front.footer')
    </main>

  </div> <!-- .site-wrap -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
@include('front.footerlinking')

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
          $('.slider').slick({
              slidesToShow: 4,
              slidesToScroll: 1,
              dots: false,
              arrows:true,
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
