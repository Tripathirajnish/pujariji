<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pujari ji - Blog Single</title>
  @include('front.headerlinking')
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



      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            @foreach ($data as $key =>$value)
                <div class="col-md-4">
                <div class="post-entry">
                    <a href="{{ url('view-bolg',Crypt::encryptString($value->blog_id)) }}" class="d-block mb-4">
                    <img src="{{ $value->blog_image }}" alt="" class="img-fluid"  style="border-radius: 20px; max-height:200px;" >
                    </a>
                    <div class="post-text mt-2 fw-bolder">
                    <span class="post-meta fw-bolder">{{ date('F d, Y',strtotime($value->created_at)) }} &bullet; By <span class="text-dark fw-bold">{{ get_vendor_name($value->added_by)['name'] }}</span></span>
                    <h3 class="text-truncate w-100"><a href="{{ url('view-bolg',Crypt::encryptString($value->blog_id)) }}">{{ $value->title }}</a></h3>
                    </a></h3>
                    <p style="">{{ substr($value->description,0,150) }}...</p>
                    <p><a href="{{ url('view-bolg',Crypt::encryptString($value->blog_id)) }}" class="readmore">Read more</a></p>
                    </div>
                </div>
                </div>
            @endforeach
            {{-- <div class="col-md-4">
              <div class="post-entry">
                <a href="blog-single.html" class="d-block mb-4">
                  <img src="{{url('front/img/pandit.jpg')}}" alt="Image" class="img-fluid"  style="border-radius: 20px;">
                </a>
                <div class="post-text">
                  <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Dharmesh Pandit</a></span>
                  <h3><a href="single_blog.php">भारतीय पुजारीजी
                  </a></h3>
                  <p>पुजारीजी भारतीय वैदिक पूजा के लिए एक लोकप्रिय ऑनलाइन बुकिंग पोर्टल है। हमारे सभी पुजारियों ने प्रतिष्ठित वैदिक संस्थानों और गुरुकुलों में प्रशिक्षण प्राप्त किया है | वैदिक परंपराओं और आपके कुल के रीति-रिवाजों के अनुसार पूजा करते हैं। पुजारी जी भारतीय महानगरों जैसे लखनऊ, गोरखपुर, चेन्नई, हैदराबाद, मुंबई, दिल्ली-एनसीआर, कोलकाता और अन्य स्थानों पर हिंदी व अन्य क्षेत्रीय भाषाओं में सेवाएं प्रदान करते हैं। हम काशी, रामेश्वरम, प्रयागराज, त्र्यंबकेश्वर हरिद्वार, गया और दतिया जैसे मंदिर और तीर्थ क्षेत्रों में ऑनलाइन व ऑफलाइन सेवाएं प्रदान करते हैं।
                  </p>
                  <p><a href="single_blog.php" class="readmore">Read more</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="post-entry">
                <a href="single_blog.php" class="d-block mb-4">
                  <img src="{{url('front/img/pandit.jpg')}}" alt="Image" class="img-fluid"  style="border-radius: 20px;">
                </a>
                <div class="post-text">
                  <span class="post-meta">December 13, 2019 &bullet; By <a href="#">Dharmesh Pandit</a></span>
                  <h3><a href="single_blog.php">भारतीय पुजारीजी
                  </a></h3>
                  <p>पुजारीजी भारतीय वैदिक पूजा के लिए एक लोकप्रिय ऑनलाइन बुकिंग पोर्टल है। हमारे सभी पुजारियों ने प्रतिष्ठित वैदिक संस्थानों और गुरुकुलों में प्रशिक्षण प्राप्त किया है | वैदिक परंपराओं और आपके कुल के रीति-रिवाजों के अनुसार पूजा करते हैं। पुजारी जी भारतीय महानगरों जैसे लखनऊ, गोरखपुर, चेन्नई, हैदराबाद, मुंबई, दिल्ली-एनसीआर, कोलकाता और अन्य स्थानों पर हिंदी व अन्य क्षेत्रीय भाषाओं में सेवाएं प्रदान करते हैं। हम काशी, रामेश्वरम, प्रयागराज, त्र्यंबकेश्वर हरिद्वार, गया और दतिया जैसे मंदिर और तीर्थ क्षेत्रों में ऑनलाइन व ऑफलाइन सेवाएं प्रदान करते हैं।
                  </p>
                  <p><a href="single_blog.php" class="readmore">Read more</a></p>
                </div>
              </div>
            </div> --}}




          </div>

          <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {!! $data->links() !!}
            </div>
          </div>
        </div>
      </div>





    </main>
    @include('front.footer')
  </div> <!-- .site-wrap -->

  @include('front.footerlinking')

  <script>
    function scrollToDownload() {
        var element = document.getElementById("downloadlink");
        element.scrollIntoView({ behavior: "smooth" });
    }
    </script>

  </body>
</html>
