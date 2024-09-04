<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  @include('front.headerlinking')
  <link href="{{url('front/css/custom.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <title>Pujari ji- {{ $detail->name ?? "" }}</title>

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

<style>
.video-slider {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 40px;
    padding: 20px; /* Add padding around the slider */
}

.video-slider div {
    position: relative; /* Ensure position for pseudo elements */
    overflow: hidden; /* Hide overflow to contain pseudo-element */
}

.video-slider iframe {
    width: 100%;
    height: 300px; /* Fixed height for images */
    object-fit: cover; /* Maintain aspect ratio and cover container */
    border: 8px solid #ffffff; /* White border */
    box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.3); /* Shadow effect */
    border-radius: 15px; /* Rounded corners */
    transition: transform 0.3s ease-in-out; /* Smooth hover effect */
}

.video-slider frame:hover {
    transform: translateY(-5px); /* Move image up slightly on hover */
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
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-md-10 text-center hero-text">
                  <h1 style="font-size:2rem !important;" data-aos="fade-up" data-aos-delay="">{{ $detail->name ?? ""}}</h1>

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
           

              <div class="card-wrapper">
                <div class="card">
                  <div class="image-wrap">
                    <div class="img-display">
                      <div class="img-show">
                       @foreach($images_list as $img)
                        <img src="{{ $img->image }}" alt="img">
                        @endforeach
                      </div>
                    </div>
                    <div class="img-select">
                      @foreach($images_list as $image)
                      <div class="img-item">
                        <a href="#" data-id="{{$loop->iteration}}">
                          <img src="{{ $image->image }}" alt="img">
                        </a>
                      </div>
                      @endforeach
                     
                    </div>
                  </div>
                </div>
              </div>

          

              <div class="title-wrap">
                <h4>{{$detail->purpose ?? ''}}</h4>
              </div>

              <div class="">
               <div class="d-flex align-items-center mb-2">
                  <i class="las la-gopuram mr-2"></i>
                  <p class="mb-0" style="color: #737272;">{{$mandir->title ?? ""}}</p>
                </div>
                <div class="d-flex align-items-center">
                  <i class="las la-calendar mr-2"></i>
                  <p class="mb-0" style="color: #737272;">{{date('d F, l',strtotime($pooja->date))}}, {{$detail->tithi_name ?? ''}}</p>
                </div>
              </div>

                <div class="counter my-3">
                  <h5>{{$messages['pujaListing']['pujaCountDown']}}</h5>
                  <div id="countdown">
                    <ul>
                      <li><span id="days"></span>Day</li>
                      <li><span id="hours"></span>Hours</li>
                      <li><span id="minutes"></span>Mins</li>
                      <li><span id="seconds"></span>Secs</li>
                    </ul>
                  </div>
                </div>
            </div>

            
            <div class="col-md-6 sidebar mt-1">
            
              <div class="sidebar-box title-wrap" style="padding: 25px 0 0 0;">

                <h2>{{ $detail->name?? '' }}</h2>
                <p class="text-justify" style="color: #6f6f71;">{!! Str::limit( $detail->description ?? '', 750, ' .') !!}
                <!-- <a  href="#temple" aria-controls="temple" aria-selected="true" >Read More</a> -->
                </p>

             

                <div class="my-3">
                  <!-- <div class="d-flex align-items-center  mb-2">
                    <div class="devotees-list ml-2">
                      <div class="img-div">
                        <img src="https://i.ibb.co/8x9xK4H/team.jpg" alt="">
                      </div>
                      <div class="img-div">
                        <img src="https://i.ibb.co/8x9xK4H/team.jpg" alt="">
                      </div>
                      <div class="img-div">
                        <img src="https://i.ibb.co/8x9xK4H/team.jpg" alt="">
                      </div>
                      <div class="img-div">
                        <img src="https://i.ibb.co/8x9xK4H/team.jpg" alt="">
                      </div>
                      <div class="img-div">
                        <img src="https://i.ibb.co/8x9xK4H/team.jpg" alt="">
                      </div>

                    </div>
                    <div class="ml-3">
                      <p class="mb-0">{{$pooja->booking_count ?? 200}}+</p>
                    </div>
                  </div> -->
                  <div>
                    <p style="color: #6f6f71;">{{$messages['pujaListing']['tillNow']}} <b style="color: #000;">{{$pooja->booking_count ?? 200}}+ {{$messages['pujaListing']['devotees']}}</b> {{$messages['pujaListing']['devoteeInfo']}}</p>
                  </div>
                </div>



                <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                  <a href="#pujapackage" class="btn btn-outline-white"
                    style="background-color: #ff6300; color: #fff;">{{$messages['pujaListing']['selectPackage']}}</a>
                </p>

              </div>

            </div>
          </div>
        </div>
      </section>

      <section class="site-section" style="padding: 1rem 0;">
        <div class="container">
          <div class="row">
            <div class="col-md-12 blog-content ">
              <div class="row">
                <div class="col-md-2 mb-3">
                  <ul class="nav nav-pills flex-column" id="experienceTab" role="tablist">
                  @if($benefits->isNotEmpty())
                    <li class="nav-item">
                      <a class="nav-link active" id="benefits-tab" data-toggle="tab" href="#snit" role="tab"
                        aria-controls="benefits" aria-selected="true">{{$messages['pujaListing']['benefits']}}</a>
                    </li>
                  @endif

                  @if($process->isNotEmpty())
                    <li class="nav-item">
                      <a class="nav-link" id="process-tab" data-toggle="tab" href="#devs" role="tab"
                        aria-controls="process" aria-selected="false">{{$messages['pujaListing']['process']}}</a>
                    </li>

                  @endif

                    @if($mandir->title)
                    <li class="nav-item">
                      <a class="nav-link" id="temple-tab" data-toggle="tab" href="#temple" role="tab"
                        aria-controls="temple" aria-selected="false">{{$messages['pujaListing']['templeDetails']}}</a>
                    </li>
                    @endif

                    <li class="nav-item">
                      <a class="nav-link" id="package-tab" href="#pujapackage" role="tab" aria-controls="package"
                        aria-selected="false">{{$messages['pujaListing']['pujaPackage']}}</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" id="faq-tab" href="#faq" role="tab" aria-controls="faqs"
                        aria-selected="false">{{$messages['pujaListing']['faq']}}</a>
                    </li>
                   
                  </ul>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-10">


                  <div class="tab-content" id="experienceTabContent">
                    @if($benefits->isNotEmpty())
                    <div class="tab-pane fade show active text-left text-light" id="snit" role="tabpanel"
                      aria-labelledby="benefits-tab">
                      <h3>{{$messages['pujaListing']['pujaBenefits']}}</h3>
                      <!-- ------------- -->
                      <div class="row benefit-section">

                      @foreach($benefits as $benefit)
                        <div class="col-md-6 col-lg-4">
                          <div class="benefit-div">
                            <div class="part-1">
                              <div class="wrap-icon icon-1">
                                <img src="../front/img/pooja (3).png" alt="" style="width: 35px; height: 35px;">
                              </div>
                              <h3 class="title">{{$benefit->title ?? ''}}</h3>
                            </div>
                            <div class="part-2">
                              <p class="description">{{$benefit->description ?? ''}}</p>
                              <!-- <a href="">Read More</a> -->
                            </div>
                          </div>
                        </div>
                      @endforeach
                      </div>
                      <!-- ------------- -->
                    </div>
                    @endif


                    @if($process->isNotEmpty())
                    <div class="tab-pane fade text-left text-light" id="devs" role="tabpanel"
                      aria-labelledby="process-tab">
                      <h3>{{$messages['pujaListing']['pujaProcess']}}</h3>
                      <div class="row">

                        @foreach($process as $p)
                        <div class="col-md-6 mb-3">
                          <div class="step">
                            <span class="number" style="color: #ff6300;">0{{ $loop->iteration }}</span>
                            <h3>{{$p->title}}</h3>
                            <p style="color: #9fa1a4;">{{$p->description ?? ''}}</p>
                          </div>
                        </div>
                        @endforeach

                      </div>
                    </div>

                    @endif

                    @if($mandir->title)
                    <div class="tab-pane fade text-left text-light" id="temple" role="tabpanel"
                      aria-labelledby="temple-tab">
                      <h3>{{$mandir->title ?? ''}}</h3>
                      <div class="row mt-5">
                        <div class="col-12 col-lg-6">
                          <div class="temple-content">
                            <p style="color: #6f6f71;">{{$mandir->description ?? ''}}</p>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6">
                          <div>
                            <img src="{{ $pooja->temple_image }}" alt="" style="border-radius: 5px; width: 100%;">
                          </div>
                        </div>
                      </div>
                    </div>

                    @endif


                  </div><!--tab content end-->
                </div><!-- col-md-8 end -->
              </div>
            </div>
          </div>
        </div>
      </section>
      @if($package->isNotEmpty())
      <section class="site-section" id="pujapackage">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-12 d-flex justify-content-center">
              <h1 class="section-heading">{{$messages['pujaListing']['selectPackage']}}</h1>
            </div>
          </div>

          <div class="row">
          @foreach($package as $pkg)
            <div class="col-lg-3 col-md-6 col-12">
              <div class="package">
                <h4>{{ app()->getLocale() == 'en' ? $pkg->name : $pkg->name_hindi }}</h4>
                <h2 class="price">₹ {{$pkg->price}}</h2>
                <small>{{ app()->getLocale() == 'en' ? $pkg->procudre : $pkg->procedure_hindi }}</small>
                <ul>
                  <li>{{ app()->getLocale() == 'en' ? $pkg->description : $pkg->description_hindi }}</b></li>
                 
                </ul>

                <!-- <a href="#" class="modal-link">
                  Modal btn
                </a> -->

                <div class="package-btn wrapper">
                  <a href="#" data-id="{{$pkg->id}}" class="btn modal-link"
                    style="background-color: #ff6300; color: #fff;width: 90%;">{{$messages['pujaListing']['select']}}</a>
                </div>
              </div>
            </div>
          @endforeach

          </div>

        </div>

      </section>

      @endif

      <section class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
              <h1 class="section-heading">What devotees Say about Pujari ji ?</h1>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
              <p>Reviews and Ratings from our customers who performed online Puja with us.</p>
            </div>

            <!-- ------------------ -->
            <div class="mt-4">

              <div id="testimonial4"
                class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
                data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="testimonial4_slide">
                      <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                      <h4>Mukul Raj</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                    <div class="testimonial4_slide">
                      <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                      <h4>Sunil Kumar Saini</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="testimonial4_slide">
                      <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                      <h4>Shivraj</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                    <div class="testimonial4_slide">
                      <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                      <h4>Jai Raj Yadav</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="testimonial4_slide">
                      <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                      <h4>Hemant Kumar</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                    <div class="testimonial4_slide">
                      <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                      <h4>Ramesh Chandra</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                  <i class="las la-chevron-left"></i>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                  <i class="las la-chevron-right"></i>
                </a>
              </div>
            </div>
            <!-- ------------------ -->


          </div>
        </div>
      </section>

      @if($videos->isNotEmpty())

      <section style="background-image: linear-gradient(to bottom, #feecdc, #fff9) !important;">
        <div class="container-fluid slider-view pt-5">
           <div class="col-md-12 d-flex justify-content-center">
              <h1 class="section-heading">Glimpses of our past puja experience</h1>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
              <p style="text-align:center;">The full video recording, including your name and gotra chanting, will be shared after the puja is completed.</p>
            </div>
          
          <div class="video-slider">
                @foreach ($videos as $key =>$value)
                  <div style="text-align:left;padding:10px;" >
                    <div class="post-entry">
                        <iframe style="border-radius: 20px; max-height:400px; min-height:400px; width:100%;" class="video-frame" src="https://www.youtube.com/embed/{{ $value->url }}" frameborder="0" allowfullscreen></iframe>
                      
                        <div class="post-text mt-2 fw-bolder">
                          <h3 class="text-truncate w-100" style="height:auto;" >{{ $value->title }}</h3>
                          <span class="post-meta fw-bolder">{{ date('F d, Y',strtotime($value->created_at)) }}
                          </span>
                        </div>
                      </div>
                  </div>
               @endforeach
             
          </div>
        </div>
      </section>
      @endif

      <section class="site-section" id="faq">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-12 d-flex justify-content-center">
              <h1 class="section-heading">Frequently asked Questions</h1>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-12 d-flex justify-content-center">

              <div class="accordion">

                <article>
                  <input id="article1" type="radio" name="articles" checked>
                  <label for="article1">
                    <h5>Why should I choose Pujari Ji for performing Puja?</h5>
                  </label>
                  <div>
                    Pujari Ji is the largest devotion technology company trusted by 1 Cr+ Hindus worldwide. We offer
                    multiple services such as Praying app, Chadhava services, Puja services and Astrology services.
                    PujariJi provides the most trusted information regarding Hindu shastras and festivals of Hindu
                    Dharma. All our pujas are conducted by experienced pandit ji's at important pilgrim locations of
                    India such as Haridwar, Varanasi, Kamakhya-Guwahati, Kolhapur-Mahalakshmi etc. Our experienced
                    pandit ji's follow the right process as per the Shastras and also do your pujas with your name and
                    gotra with the right ‘Bhava’ or emotion. The puja updates are always sent to your Whatsapp number
                    and a recorded video is also shared with you. Additionally, prasad from the puja is delivered to
                    your home. Hari Aum.
                  </div>
                </article>

                <article>
                  <input id="article2" type="radio" name="articles">
                  <label for="article2">
                    <h5>I don’t know my Gotra, what should I do?</h5>
                  </label>
                  <div>
                    We would first suggest you to consult elders in your family to gather more information about your
                    Gotra. If at all, no one in your family remembers the Gotra information, you can follow the guidance
                    of the Shastras. As per the Shastras, if someone doesn’t know their Gotra they can consider their
                    Gotra as Kashyap Gotra. So you can mention Kashyap Gotra in your Sankalpa form while completing the
                    booking and proceed with your booking. Hari Aum.
                  </div>
                </article>

                <article>
                  <input id="article3" type="radio" name="articles">
                  <label for="article3">
                    <h5>Who will perform the Puja?</h5>
                  </label>
                  <div>
                    Pujari Ji is trusted by 1 Cr+ Hindus worldwide. We believe that it is our responsibility and Dharma
                    to do justice to the trust put by our users in our services. Consequently, we conduct every puja
                    with proper rituals as defined in the shastras of that deity. All the pandit ji’s who conduct pujas
                    for PujariJi have experience ranging from 10-30 years. The families of our pandit ji's have been
                    working at the temple for generations and all of them revere the deity immensely. Not just the
                    process and rituals, our pandit ji's also have the right ‘bhava’ or emotion while doing your pujas
                    and praying for your well-being. Hari Aum.
                  </div>
                </article>

                <article>
                  <input id="article4" type="radio" name="articles">
                  <label for="article4">
                    <h5>What will be done in this Puja?</h5>
                  </label>
                  <div>
                    Our pandit ji’s conducting pujas at the famous temples have exceptional knowledge and experience in
                    Vedic rituals. Every puja through Pujari Ji is always conducted in your name and gotra, as
                    mentioned in our Vedas. Our pandit ji will perform your puja with the right ‘bhava’ and rituals
                    mentioned in the ancient scriptures. After completing the puja, pandit ji will pray for the
                    well-being of your family and your success. Hari Aum.
                  </div>
                </article>

                <article>
                  <input id="article5" type="radio" name="articles">
                  <label for="article5">
                    <h5>How will I know the Puja has been done in my name?</h5>
                  </label>
                  <div>
                    Pujari Ji is a trusted devotional brand where we perform every puja as per the Hindu shastras. Our
                    experienced pandits of the temple will meticulously perform the Vedic rituals in your name and gotra
                    and pray for your happiness and success. After the completion of the rituals, we will share all the
                    puja updates to your Whatsapp number and a video of the puja will also be shared with you.
                    Additionally, the prasad from the puja will be delivered to your home. Hari Aum.
                  </div>
                </article>

              </div>

            </div>
          </div>
        </div>
      </section>

      <!-- modal html -->

      <div id="custom-modal" class="custom-modal">
        <div class="custom-modal-dialog">
          <div class="custom-modal-content">
            <span class="close-modal">X</span>
            <div class="custom-modal-body">
              <div class="custom-modal-inner">
                <!-- Contetn here -->
                <h4 class="mb-4"> {{$messages['pujaListing']['otppopupHeading']}} </h4>
                <div class="alert alert-danger d-none" id="err_div">
                      <h6 id="err_message"></h6>
                </div>
                <div class="alert alert-success d-none" id="saveLead">
                    <h6 id="leadresponse"></h6>
                </div>
                <form id="submit-otp-form" action="javascript:void(0)" url="{{url('send-otp')}}">
                @csrf
                  <div class="row">
                    <div class="col-md-12">

                      <div class="form-group" id="name-block">
                        <label for="">{{$messages['pujaListing']['enterName']}}</label>
                        <input type="text" name="name" class="form-control" id="" required="">
                        <input type="hidden" name="package"  id="current-package-id" value="" required="">
                        <input type="hidden" name="slug"  id="current-pooja-slug" value="{{$pooja->pooja_id}}" required="">
                        <input type="hidden" name="pooja_id"  id="current-pooja-id" value="{{$pooja->id}}" required="">
                        <input type="hidden" name="enquiry_id"  id="current-enquiry-id"  >
                      </div>
                      <div class="form-group" id="mobile-block" >
                        <label for="">{{$messages['pujaListing']['enterMobile']}}</label>
                        <input type="text"  maxlength="10" minlength="10" name="mobile" class="form-control numbersOnly nospace" id="" required="">
                      </div>

                      <div id="otp-block" class="form-group" style="display:none;">
                        <label for="">{{$messages['pujaListing']['enterOtp']}}</label>
                        <input name="otp" maxlength="4" minlength="4" type="text" class="form-control numbersOnly nospace" id="">
                      </div>
                      <div class="mt-4">
                        <button type="submit" id="submit-btn" class="btn btn-primary w-100">{{$messages['pujaListing']['next']}}</button>
                      </div>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- modal html end-->
    </main>
    @include('front.footer')
  </div> <!-- .site-wrap -->

  <!-- Vendor JS Files -->
  @include('front.footerlinking')

  <script>
   (function () {
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

    // Set the target date for the countdown
    let targetDate = new Date("{{$pooja->booking_end_date ?? $pooja->date}}");

    const countDown = targetDate.getTime(),
        x = setInterval(function () {

            const now = new Date().getTime(),
                distance = countDown - now;

            document.getElementById("days").innerText = Math.floor(distance / (day));
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour));
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute));
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

            // Do something later when date is reached
            if (distance < 0) {
                document.getElementById("countdown").style.display = "none";
                document.getElementById("content").style.display = "block";
                clearInterval(x);
            }
            // seconds
        }, 0);
}());

  </script>


<script>
    const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
      imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
      });
    });

    function slideImage() {
      const displayWidth = document.querySelector('.img-show img:first-child').clientWidth;

      document.querySelector('.img-show').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);
  </script>



  <script>
    (function ($) {
      "use strict";
      $(document).ready(function () {
        $('.modal-link').on('click', function () {
          let current_package_id = $(this).attr('data-id');
          const user_string = localStorage.getItem('user');
          // if (user_string) {
          //     const user = JSON.parse(user_string);
          //     window.location.href = "{{url('booking-process/'.$pooja->pooja_id.'?package=')}}"+current_package_id;
          // }else{
            $('#current-package-id').val(current_package_id);
            $('body').addClass("modal-open");
          //}
        
        });
        $('.close-modal').on('click', function () {
           $('body').removeClass("modal-open");
           $('#name-block').show();
           $('#mobile-block').show();
           $('#otp-block').hide();
           let base_send_url ="{{ url('send-otp')}}";
           $('#submit-otp-form').attr('url', base_send_url);
        });
      });
    }(jQuery));

  </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

<script>
  if ($("#submit-otp-form").length > 0) {

      $("#submit-otp-form").validate({
          rules: {
            name: {
                    required: true,
                  } ,
            mobile: {
              required: true,
            } 
          },
        submitHandler: function(form) {
          $.ajax({
            url: $('#submit-otp-form').attr('url'),
            type: "POST",
            data: $('#submit-otp-form').serialize(),
            success: function(result) {
              if(result.status_code==200){
                  $('#name-block').hide();
                  $('#mobile-block').hide();
                  $('#submit-otp-form').attr('url', result.url);
                  localStorage.setItem('enquiry_id', result.enquiry_id);
                  $('#current-enquiry-id').val(result.enquiry_id);
                  $('#otp-block').show();
                  $('#submit-btn').text('Submit');
                  $('#leadresponse').html(result.message);
                  $('#saveLead').show();
                  $('#saveLead').removeClass('d-none');
                  setTimeout(function(){
                      if(result.is_otp_verified==true){
                        localStorage.setItem('user', JSON.stringify(result.response));
                        window.location.href = result.redirect_url;
                      }
                     $('#saveLead').hide();
                     $('#leadresponse').html('');
                  },3000);  
              }else{
                  $('#err_message').html(result.message);
                  $('#err_div').show();
                  $('#err_div').removeClass('d-none');
                  setTimeout(function(){
                     $('#err_div').hide();
                     $('#err_message').html('');
                  },2000);
              }
            }
          });
        }
    });
  }
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
          $('.video-slider').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              dots: true,
              arrows:true,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 2000,
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
