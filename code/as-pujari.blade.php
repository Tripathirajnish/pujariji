<!DOCTYPE html>
<html lang="en">
<head>
@include('front.headerlinking')
<title>Pujari ji</title>
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


      </div>



      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="row align-items-center">
              <div class="col-md-4 mr-auto" >
                <h2 class="mb-4 ml-2" >Pujari Ji Vendor Signup!</h2>
                <p class="mb-4  ml-3">Elevate Your Business with Seamless Pooja Bookings! Join Now to Boost Visibility, Manage Appointments, and Connect with Clients effortlessly.</p>

              </div>
              <div class="col-md-6" data-aos="fade-left">
                <img src="{{url('front/img/vendor/PujariJi.png')}}" alt="Image" class="img-fluid" style="height: 500px; margin-left: 20px;" >
                <!-- <img src="img/po/1.svg" alt="Image" class="img-fluid" style="width: 100% !important; height: auto !important;"> -->

              </div>
            </div>
        </div>
      </div> <!-- .site-section -->

      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 ml-auto order-2">
              <h2 class="mb-1" style="margin-top: 50px;">Hassle-Free Astrologer Signup</h2>
              <p class="mb-4">Join our portal as an astrologer today! Experience seamless signup with your phone number, connect with clients, and share your astrological expertise effortlessly.</p>

            </div>
            <div class="col-md-6" data-aos="fade-right">
              <img src="{{url('front/img/vendor/Astrologer.png')}}" alt="Image" class="img-fluid" style="height: 500px; margin-left: 20px;" >
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->

      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 mr-auto" style=" text-align: justify;">
              <h2 class="mb-4" style="margin-top:-10px;">KathaConnect</h2>
              <p class="mb-4">Unleash Your Tales! Kathavachaks, sign up or log in with your phone number on our portal to share your captivating stories and connect with eager audiences. Your stories deserve to be heard – join the storytelling revolution now!</p>
              <!-- <p><a href="#">Read More</a></p> -->
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <img src="{{url('front/img/vendor/Kathawachak.png')}}" alt="Image" class="img-fluid"  style="height: 500px; margin-left: 20px;" >
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->

<!-- 
      <div class="site-section cta-section" id="downloadlink">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
              <h2>Download As Pujari Ji from Play Store</h2>
            </div>
            <div class="col-md-5 text-center text-md-right">
              <p> <a href="https://play.google.com/store/apps/details?id=com.app.aspujariji&pcampaignid=web_share" class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
            </div>
          </div>
        </div>
      </div> -->


      <!-- <div class="site-section cta-section" id="downloadlink">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
              <h2>Download from Play Store</h2>
            </div>
            <div class="col-md-5 text-center text-md-right">
              <p> <a href="#" class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
            </div>
          </div>
        </div>
      </div> -->

    </main>
    @include('front.footer')
  </div> <!-- .site-wrap -->

  <!-- Vendor JS Files -->
  @include('front.footerlinking')

  </body>
</html>
