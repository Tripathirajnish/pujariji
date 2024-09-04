<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pujari ji- {{ $data->title }}</title>

  @include('front.headerlinking')

</head>


<style>
  /* CSS to increase image size and make it responsive */
  .large-image {
      max-width: 100%;
      height: auto;
      width: 400px; /* Desired width in pixels for larger screens */
      border-radius: 20px;
  }

  /* Media query for smaller screens (e.g., mobile) */
  @media (max-width: 768px) {
      .large-image {
          width: 100%; /* Make it full-width on smaller screens */
          border-radius: 0; /* Remove border-radius for smaller screens */
      }
  }
</style>

<body>

  <div class="site-wrap">

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
                <div class="col-md-10 text-center hero-text">
                  <h1 data-aos="fade-up" data-aos-delay="">Blog Post</h1>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>



      <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 blog-content ">



            <div class="row mb-5">
              <div class="col-md-12" style="margin-top: 60px;">

                <figure>
                  {{-- <img src="img/pandit.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid large-image" style="border-radius: 20px;"> --}}
                  <img src="{{ $data->blog_image }}" alt="" class="img-fluid"  style="border-radius: 10px; max-height:500px;" >
              </figure>
                <!-- <figure><img src="img\pandit.jpg"" alt="Free Website Template by Free-Template.co" class="img-fluid"  style="border-radius: 20px;"> -->
            </figure>


              </div>

            </div>


            <div class="pt-5">
              <!-- <p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p> -->
            </div>



          </div>
         <div class="col-md-6 sidebar mt-1">
            <div class="sidebar-box" style="margin-top:-100px;">

            </div>

            <div class="sidebar-box">
                <span class="post-meta fw-bolder">{{ date('F d, Y',strtotime($data->created_at)) }} &bullet; By <span class="text-dark fw-bolder">{{ get_vendor_name($data->added_by)['name'] }}</span></span>

              <h3>{{ $data->title }}</h3>
              <p class="text-justify">{{ $data->description }}</p>

</div>


          </div>
        </div>
      </div>
    </section>

    <!-- <div class="site-section cta-section" id="downloadlink">
                    <div class="container">
                      <div class="row align-items-center">
                        <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
                          <h2>Download from Play Store</h2>
                        </div>
                        <div class="col-md-5 text-center text-md-right">
                          <p> <a href="https://play.google.com/store/apps/details?id=com.app.pujari_ji&pcampaignid=web_share" class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
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
