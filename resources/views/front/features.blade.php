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
                <h2 class="mb-4 ml-2" >Spiritual Hub: Pooja, Astrology, Katha & More!</h2>
                <p class="mb-4  ml-3">Experience a holistic journey within a single app. Explore a wide array of services, including online/offline Pooja rituals, personalized Astrology insights, enriching Katha Vachak narrations, Event Pooja coordination, Kundali analysis, and Upcoming Pooja schedules. Connect with Temple Services for a spiritual experience, access Pooja Materials, and stay updated with Panchang for auspicious moments. Your spiritual voyage begins here.</p>

              </div>
              <div class="col-md-6" data-aos="fade-left">
                <img src="{{url('front/img/po/1.png')}}" alt="Image" class="img-fluid" style="height: 600px; margin-left: 20px;" >
                <!-- <img src="img/po/1.svg" alt="Image" class="img-fluid" style="width: 100% !important; height: auto !important;"> -->

              </div>
            </div>
        </div>
      </div> <!-- .site-section -->

      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 ml-auto order-2">
              <h2 class="mb-1" style="margin-top: 50px;">PoojaMart: Your Spiritual Store</h2>
              <p class="mb-4">Discover divine treasures on India's Pooja eCommerce app. Explore a world of sacred items for your spiritual journey.</p>

            </div>
            <div class="col-md-6" data-aos="fade-right">
              <img src="{{url('front/img/feature/2.png')}}" alt="Image" class="img-fluid" style="height: 600px; margin-left: 20px;" >
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->

      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 mr-auto" style=" text-align: justify;">
              <h2 class="mb-4" style="margin-top:-10px;">PoojaEventPro: Book Blessings</h2>
              <p class="mb-4">Streamline event Pooja bookings effortlessly with our user-friendly app. Ensure divine blessings at your special occasions.</p>
              <!-- <p><a href="#">Read More</a></p> -->
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <img src="{{url('front/img/feature/3.png')}}" alt="Image" class="img-fluid"  style="height: 600px; margin-left: 20px;" >
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->

      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 ml-auto order-2" style=" text-align: justify;">
              <h2 class="mb-4" style="margin-top: 40px;">Kundali:Apka Bhavishya </h2>
              <p class="mb-4">Unlock cosmic insights with our Kundali booking app. Explore your destiny and make informed life choices.</p>

            </div>
            <div class="col-md-6" data-aos="fade-right">
              <img src="{{url('front/img/feature/4.png')}}" alt="Image" class="img-fluid"  style="height: 600px; margin-left: 20px;" >
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->




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
