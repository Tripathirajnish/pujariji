<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.headerlinking')
    <link href="{{url('front/css/booking.css')}}" rel="stylesheet">
    <title>Pooja Booking Process - Pujariji</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <meta name="csrf-token" content="{{csrf_token()}}">
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
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-md-7 text-center hero-text">
                                    <h1 data-aos="fade-up" data-aos-delay="">Booking Process</h1>
                                    <p class="mb-5" data-aos="fade-up" data-aos-delay="100">{{$detail->name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 blog-content">
                            <div class="container">
                                  <!-- Step Wizard -->
                                <div class="stepwizard col-md-offset-3">
                                    <div class="stepwizard-row setup-panel">
                                        <div class="stepwizard-step">
                                            <a href="#step-1" type="button" class="btn btn-primary">1</a>
                                            <p>Review Booking</p>
                                        </div>
                                        <div class="stepwizard-step">
                                            <a href="#step-4" type="button" class="btn btn-default nextBtn" disabled="disabled">2</a>
                                            <p>Make Payment</p>
                                        </div>
                                        <div class="stepwizard-step">
                                            <a href="#step-2" type="button" class="btn btn-default"
                                            disabled="disabled">3</a>
                                            <p>Fill Name , Gotra & Address</p>
                                        </div>
                                        <div class="stepwizard-step">
                                            <a href="#step-3" type="button" class="btn btn-default"
                                            disabled="disabled">4</a>
                                            <p>Booking Details</p>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row setup-content" id="step-1">
                                            <div class="col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="col-md-12 div-brdr mb-3">
                                                            <h5>{{$detail->name}}</h5>
                                                            <p>{{$package->name}}</p>
                                                            <p style="color: #000;">₹{{$package->price}}</p>
                                                            <hr>
                                                            <div class="mt-3">
                                                                <div class="d-flex align-items-center mb-2">
                                                                    <i class="las la-gopuram mr-2"></i>
                                                                    <p class="mb-0" style="color: #737272;">
                                                                        {{$mandir->title}}</p>
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="las la-calendar mr-2"></i>
                                                                        <p class="mb-0" style="color: #737272;">{{date('d F, l',strtotime($pooja->date))}}, {{$detail->tithi_name}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-md-12 div-brdr">
                                                                <h5>Deep Daan (Offering of Lamps)</h5>
                                                                <div class="d-flex justify-content-between">
                                                                    <p style="color: #000; margin-bottom: 0px;">₹251</p>
                                                                    <div class="quantity">
                                                                        <button>-</button>
                                                                        <p class="mb-0">1</p>
                                                                        <button>+</button>

                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="col-md-12 div-brdr">
                                                                <h6 class="mb-0">Apply Coupon</h6>

                                                            </div> -->
                                                            <hr>
                                                            <div class="col-md-12 p-0">
                                                                <div>
                                                                    <h5>Bill details</h5>
                                                                    <div class="d-flex">
                                                                        <div class="w-50">
                                                                            <p style="color: #737272">{{$package->name}}
                                                                            </p>
                                                                        </div>
                                                                        <div class="w-50 text-right">
                                                                            <p style="color: #737272">₹ {{$package->price}}.0</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="d-flex">
                                                                        <div class="w-50">
                                                                            <p style="color: #737272">Deep Daan
                                                                                (Offering of
                                                                            Lamps)</p>
                                                                        </div>
                                                                        <!-- <div class="w-50 text-right">
                                                                            <p style="color: #737272">₹ 251.0</p>
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="d-flex">
                                                                        <div class="w-50">
                                                                            <p style="color: #737272">Total Amount</p>
                                                                        </div>
                                                                        <div class="w-50 text-right">
                                                                            <p style="color: #000"><b>₹ {{$package->price}}.0</b></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary nextBtn pull-right"
                                                            type="button">Continue</button>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card-container">
                                                                <div class="card">
                                                                    <img src="https://img1.wsimg.com/isteam/ip/1ba85ad7-f50d-4310-89dc-f7988905e4b3/ae95bd01614e47f26e70e.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:1280"
                                                                    alt="img">
                                                                    <div class="card-content">
                                                                        <h6>Vastra Daan (Offering Clothes to the Needy)
                                                                        </h6>
                                                                        <p>Vastra Daan is a virtuous deed that
                                                                            symbolises compassion and
                                                                            generosity
                                                                            towards those in need. This act of donating
                                                                            clothes will be done
                                                                            in your
                                                                        name at an orphanage or old age home .</p>
                                                                        <div
                                                                        class="d-flex justify-content-between quantity">
                                                                        <p
                                                                        style="color: #ff6300; margin-bottom: 0px;padding:0px">
                                                                        <b>₹1051</b>
                                                                    </p>
                                                                    <button id="add-button" type="button">Add</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <img src="https://images.donatekart.com/campaign/cover/gau-seva720872297.jpg"
                                                            alt="img">
                                                            <div class="card-content">
                                                                <h6>Gau Seva (Care and Service for Cows)</h6>
                                                                <p>The highly meritorious act of providing care
                                                                    and service to cows
                                                                    is seen as a
                                                                    way of connecting with the divine,
                                                                    fulfilling one's moral duty,
                                                                    and a means
                                                                    to attain salvation. After the puja, service
                                                                    to Gau Mata will be
                                                                    done in
                                                                    your name in Vrindavan, the city of Krishna.
                                                                </p>
                                                                <div
                                                                class="d-flex justify-content-between quantity">
                                                                <p
                                                                style="color: #ff6300; margin-bottom: 0px;padding:0px">
                                                                <b>₹551</b>
                                                            </p>
                                                            <button type="button">Add</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row setup-content" id="step-2">
                                <div class="col-xs-12 col-md-offset-3">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="col-md-12 mb-3 p-0">
                                                    <h5>Your Number</h5>
                                                    <p>Your Puja booking updates like Puja Photos,
                                                        Videos and other details will be sent on number.
                                                    </p>
                                                    <div class="form-group">
                                                        <label for="">Enter Mobile Number</label>
                                                        <input id="member-mobile" type="text" class="form-control">
                                                        <span class="help-block"></span>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="col-md-12 mb-3 p-0 member-list">
                                                    <h5>Name of member participating in Puja</h5>
                                                    <p>Panditji will take these names along with gotra
                                                        during the puja.
                                                    </p>
                                                    @for($i=1; $i<=$package->member_limit; $i++)
                                                        <div class="row">
                                                            <div class="col-md-8 col-6">
                                                                <div class="form-group">
                                                                    <label for="">Enter Member @if($package->member_limit>1) {{$i}} @endif Name</label>
                                                                    <input id="member-name-{{$i}}" name="member[]" type="text" class="form-control" >
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-6">
                                                                <div class="form-group">
                                                                    <label for="">Gender</label>
                                                                    <select id="member-gender-{{$i}}" name="gender[]"  class="form-control" >
                                                                        <option value ="">Select</option>
                                                                        <option value ="Male">Male</option>
                                                                        <option value ="Female">Female</option>
                                                                        <option value ="Other">Other</option>
                                                                    </select>
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        @endfor
                                                    </div>
                                                    <hr>
                                                    <div class="col-md-12 mb-3 p-0">
                                                        <h5>Fill participant’s gotra</h5>
                                                        <p>Gotra will be recited during the puja.
                                                        </p>
                                                        <div class="form-group">
                                                            <label for="">Enter Gotra</label>
                                                            <input type="text" class="form-control" id="gotra">
                                                            <span class="help-block"></span>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault">
                                                            <label class="form-check-label"
                                                            for="flexCheckDefault">
                                                            I do not know my gotra
                                                        </label>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="col-md-12 mb-3 p-0">
                                                    <h5>Do you want to get puja prasad?</h5>
                                                    <p>Prasad of workship will be sent within 8-10 days
                                                    after completion of puja </p>
                                                    <div class="form-check" style="display:inline-block;">
                                                        <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="yes" checked>
                                                        <label class="form-check-label" for="yes">Yes</label>
                                                    </div>
                                                    <div class="form-check" style="display:inline-block;">
                                                        <input class="form-check-input" type="radio"
                                                        name="flexRadioDefault" id="no">
                                                        <label class="form-check-label" for="no">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3 p-0">

                                                    <div class="form-group">
                                                        <label for="">Complete Address</label>
                                                        <input type="text" class="form-control" name="address" id="complete-address">
                                                        <span class="help-block"></span>
                                                    </div>

                                                </div>

                                                <hr>

                                                <button class="btn btn-primary nextBtn pull-right"
                                                type="button">Proceed to book</button>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="col-md-12 div-brdr mb-3">
                                                    <h5>{{$detail->name}}</h5>
                                                    <p>{{$package->name}}</p>
                                                    <p style="color: #000;">₹{{$package->price}}</p>
                                                    <hr>
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <i class="las la-gopuram mr-2"></i>
                                                            <p class="mb-0" style="color: #737272;">
                                                                {{$mandir->title}}</p>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <i class="las la-calendar mr-2"></i>
                                                                <p class="mb-0" style="color: #737272;">{{date('d F, l',strtotime($pooja->date))}}, {{$detail->tithi_name}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row setup-content" id="step-3">
                                    <div class="col-md-12">
                                        <h5>Members participating in the puja</h5>
                                        <p>These Names & the Gotra will be recited during the puja</p>
                                        <div id="preview-member-list">
                                            <p style="color: #000;">1. Mukul Raj</p>
                                        </div>
                                        <hr>
                                        <div class="d-flex">
                                            <div class="w-50">
                                                <p style="color: #737272">Gotra </p>
                                            </div>
                                            <div class="w-50 text-right">
                                                <p id="preview-gotra" style="color: #000">Kashyap</p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="w-50">
                                                <p style="color: #737272">Phone Number </p>
                                            </div>
                                            <div class="w-50 text-right">
                                                <p id="preview-mobile" style="color: #000">7988386603</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <h5>Do you want to get puja prasad?</h5>
                                            <p>Yes</p>
                                        </div>

                                        <button class="btn btn-primary nextBtn pull-right"
                                        type="button">Complete Booking</button>
                                    </div>
                                </div>
                                <div class="row setup-content" id="step-4">
                                    <div class="col-md-12">

                                        <div class="row">
                                         <div class="col-md-12 div-brdr mb-3">
                                            <div>
                                                <h5>Final Bill details</h5>
                                                <div class="d-flex">
                                                    <div class="w-50">
                                                        <p style="color: #737272">{{$package->name}}
                                                        </p>
                                                    </div>
                                                    <div class="w-50 text-right">
                                                        <p style="color: #737272">₹ {{$package->price}}.0</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="d-flex">
                                                    <div class="w-50">
                                                        <p style="color: #737272">Deep Daan
                                                            (Offering of
                                                        Lamps)</p>
                                                    </div>
                                                                        <!-- <div class="w-50 text-right">
                                                                            <p style="color: #737272">₹ 251.0</p>
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="d-flex">
                                                                        <div class="w-50">
                                                                            <p style="color: #737272">Total Amount</p>
                                                                        </div>
                                                                        <div class="w-50 text-right">
                                                                            <p style="color: #000"><b>₹ {{$package->price}}.0</b></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <form action="{{ route('payment.initiate') }}" id="razorpay-form" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="amount" id="customer-price" value="{{$package->price}}">
                                                            <input type="hidden" name="contact" id= "customer-phone" value="{{$enquiry->phone}}"> 
                                                            <input type="hidden" name="name" id="customer-name"   value="{{$enquiry->name}}" id="name">
                                                            <input type="hidden" id="jajmaan-id" name="jajmaan_id" value="">
                                                            <input type="hidden" id="enquiry-id" name="enquiry_id" value="{{$enquiry->id}}">
                                                            <input type="hidden" name="pooja_id" value="{{$package->pooja_id}}">
                                                            <input type="hidden" name="package_id" value="{{$package->id}}">
                                                            <input type="hidden" name="total_price" value="{{$package->price}}">
                                                            <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                                                            <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
                                                            <input type="hidden" name="razorpay_signature" id="razorpay_signature">
                                                            <button id="rzp-button" class="btn btn-primary nextBtn pull-right"
                                                            type="button">Pay Now</button>
                                                        </form>
                                                        
                                                        
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                </main>
                @include('front.footer')
            </div> <!-- .site-wrap -->

            <!-- Vendor JS Files -->
            @include('front.footerlinking')

            <script>

                $(document).ready(function () {
                    var navListItems = $('div.setup-panel div a'),
                    allWells = $('.setup-content'),
                    allNextBtn = $('.nextBtn');

                    allWells.hide();

                    navListItems.click(function (e) {
                        e.preventDefault();
                        var $target = $($(this).attr('href')),
                        $item = $(this);

                        if (!$item.hasClass('disabled')) {
                            navListItems.removeClass('btn-primary').addClass('btn-default');
                            $item.addClass('btn-primary');
                            allWells.hide();
                            $target.show();
                            $target.find('input:eq(0)').focus();
                        }
                    });

                    allNextBtn.click(function () {
                        var curStep = $(this).closest(".setup-content"),
                        curStepBtn = curStep.attr("id"),
                        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                        curInputs = curStep.find("input[type='text'],input[type='url'],select"),
                        isValid = true;
                        if(curStepBtn=='step-4'){
                            isValid =false;
                        }

                        $(".form-group").removeClass("has-error");
                        curInputs.each(function() {
                            var $input = $(this);
                            if (!$input.val()) {
                                isValid = false;
                                $input.closest(".form-group").addClass("has-error");
                                $input.next(".help-block").text("This field is required");
                            }
                        });
                        if (isValid){
                            updateMemberList();
                            nextStepWizard.removeAttr('disabled').trigger('click');
                        }

                    });
                    $('div.setup-panel div a.btn-primary').trigger('click');
                });


                function updateMemberList() {
                    let i =1;
                    $('#preview-member-list').html('');
                    $('.member-list .form-group input').each(function() {
                        $('#preview-member-list').append('<p style="color: #000;" >' + i + '. ' + $(this).val() + '- '+ $('#member-gender-'+i).val() +'</p>');
                        i = i + 1;
                    });
                    $('#preview-gotra').html($('#gotra').val());
                    $('#preview-mobile').html($('#member-mobile').val());
                }


                const user_string = localStorage.getItem('user');
                if (user_string) {
                    const user = JSON.parse(user_string);
                    $('#member-name-1').val(user.name);
                    $('#member-mobile').val(user.phone);
                    $('#jajmaan-id').val(user.jajmaan_id);
                }
            </script>

            <script>
                const d = new Date();
                let ms = d.valueOf();
                $('#razorpay_order_id').val(ms);
            </script>

            <script>
                var amount = '{{$package->price}}';
                var order_id = $('#razorpay_order_id').val();
                var options = {
                    "key": "rzp_live_PUrINLPbQHdpdL",
            "amount": parseInt(amount)*100, // Amount in the smallest currency unit
            "currency": "INR",
            "name": "PujariJi",
            "description": "Virtual Puja Payment",
            "image": "https://example.com/your_logo.png",
            "handler": function (response) {
                $('#razorpay_payment_id').val(response.razorpay_payment_id);
                $('#razorpay_signature').val(response.razorpay_signature);
                $('#razorpay-form').submit();
            },
            "prefill": {
                "name": $('#customer-name').val(),
                "contact": $('#customer-phone').val()
            },
            "theme": {
                "color": "#528FF0"
            }
        };

        document.getElementById('rzp-button').onclick = function(e){
            // Open Razorpay checkout form
            var rzp = new Razorpay(options);
            rzp.open();
            e.preventDefault();
        };
    </script>

</body>
</html>
