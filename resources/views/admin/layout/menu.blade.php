<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        var targetDiv = $("#yourDivId"); // Replace with the actual ID of your div

        // Function to restore the scroll position of a specific div
        function restoreDivScrollPosition() {
            var storedScrollPosition = localStorage.getItem("divScrollPosition");

            if (storedScrollPosition) {
                targetDiv.scrollTop(parseInt(storedScrollPosition));
            }
        }

        // Execute the function on document ready
        restoreDivScrollPosition();

        // Save the scroll position whenever the div is scrolled
        targetDiv.on("scroll", function() {
            var scrollPosition = targetDiv.scrollTop();
            localStorage.setItem("divScrollPosition", scrollPosition.toString());
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Function to handle click on li
        $("#yourDivId").on("click", ".menu-inner > .menu-item", function(e) {
            // Toggle open class on the clicked li
            $(this).toggleClass("open");

            // Check if the clicked li has a child list with class "menu-sub"
            if ($(this).children(".menu-sub").length > 0) {
                // Toggle active class on both child and parent li
                $(this).children(".menu-sub").find(".menu-item").toggleClass("active");
                $(this).toggleClass("active");
            }

            // Store the information in cookies
            Cookies.set("menuState", JSON.stringify({
                open: $(this).hasClass("open"),
                active: $(this).hasClass("active")
            }));

            // Stop the event from propagating to parent li elements
            e.stopPropagation();
        });

        // Apply the stored information on page load
        var storedMenuState = JSON.parse(Cookies.get("menuState"));

        if (storedMenuState && storedMenuState.open && storedMenuState.active) {
            $("#yourDivId > .menu-inner > .menu-item").addClass("open active");
            $("#yourDivId > .menu-inner > .menu-item > .menu-sub > .menu-item").addClass("active");
        }
    });
</script>
{{-- <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.674) 0%, rgb(181, 181, 181) 100%);"> --}}
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="background:#007bff !important">
    <div class="app-brand demo m-0" style="height: 57px;">
        <a href="{{ url('/dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ url('front/img/Pujari_Ji-removebg-preview.png')}}" alt="Pujari Ji" width="120px">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2 text-capitalize text-white"></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 mt-1"  id="yourDivId">
        {{-- ------------------------------------------Jajmaan------------------------------------------------ --}}
        <li class="menu-item">
            <a href="{{ url('/dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        @if(session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        {{-- ------------------------------------------Jajmaan------------------------------------------------ --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Yajman</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Jajmaan">Yajman</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.jajmaan') }}" class="menu-link">
                        <div data-i18n="Jajmaan">Yajman</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('3') || session('type') == base64_encode('master_admin') || session('type') == base64_encode('0') || session('type') == base64_encode('2'))
        {{-- ------------------------------------------Kathavachak------------------------------------------------ --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Virtual Puja</span>
        </li>
        @endif
        @if(session('type')==base64_encode('1') || session('type')==base64_encode('3') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="{{ url('virtual-add-new-pooja') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fas fa-om"></i>
                <div data-i18n="Astro Plan">Create New Puja</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ url('virtual-pooja-list') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fas fa-om"></i>
                <div data-i18n="Astro Plan">Upcoming Puja</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ url('virtual-past-puja') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fas fa-om"></i>
                <div data-i18n="Astro Plan">Past Puja</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ url('virtual-pending-pooja') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bookmarks"></i>
                <div data-i18n="Astro Plan">Pending Bookings</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ url('virtual-completed-pooja') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bookmarks"></i>
                <div data-i18n="Astro Plan">Completed Bookings</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ url('pooja-videos') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-tasks"></i>
                <div data-i18n="Astro Plan">Puja Videos</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ url('pooja-enquiry') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-tasks"></i>
                <div data-i18n="Astro Plan">Puja Enqury</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ url('virtual-pooja-category') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-tasks"></i>
                <div data-i18n="Astro Plan">Puja Category</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ url('pooja-reviews') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-tasks"></i>
                <div data-i18n="Puja Reviews">Puja Reviews</div>
            </a>
        </li>

        @endif
        @if(session('type')==base64_encode('3') || session('type') == base64_encode('master_admin') || session('type') == base64_encode('0') || session('type') == base64_encode('2'))
        {{-- ------------------------------------------Kathavachak------------------------------------------------ --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Kathavachak</span>
        </li>
        @endif
        @if(session('type')==base64_encode('3') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Drivers">Kathavachak</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.kathavachak') }}" class="menu-link">
                        <div data-i18n="Kathavachak">Kathavachak</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('pending-kathavachak-request') }}" class="menu-link">
                        <div data-i18n="Approved Drivers">Pending Request</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.rejected.kathavachak') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Rejected Request</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif


        @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-bookmarks"></i>
                <div data-i18n="Drivers">Bookings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.pending.kathas') }}" class="menu-link">
                        <div data-i18n="Pending Kathas">Pending</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.total.kathas') }}" class="menu-link">
                        <div data-i18n="Total Kathas">Completed</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.cancel.kathas') }}" class="menu-link">
                        <div data-i18n="Cancel Request">Cancel Request</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.approved.cancel.kathas') }}" class="menu-link">
                        <div data-i18n="Approved Cancel Reqquest">Approved Cancel Request</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('3') || session('type')==base64_encode('0') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        {{-- ------------------------------------------Astrologer------------------------------------------------ --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Astrologers</span>
        </li>
        @endif
        @if(session('type')==base64_encode('3') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Astrologer">Astrologer</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('astrologer-list') }}" class="menu-link">
                        <div data-i18n="All Drivers">Astrologers</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('astrologer-pending-list') }}" class="menu-link">
                        <div data-i18n="Approved Drivers">Pending Request</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('astrologer-rejected-list') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Rejected Request</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-bookmarks"></i>
                <div data-i18n="Drivers">Bookings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.pending.booking') }}" class="menu-link">
                        <div data-i18n="Pending Kathas">Pending</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.completed.booking') }}" class="menu-link">
                        <div data-i18n="Total Kathas">Completed</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.cancelled.booking') }}" class="menu-link">
                        <div data-i18n="Cancel Request">Cancel Request</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.cancelled.approved.booking') }}" class="menu-link">
                        <div data-i18n="Approved Cancel Reqquest">Approved Cancel Request</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="{{ url('astrology-plan') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-tasks"></i>
                <div data-i18n="Astro Plan">Astrology Plan</div>
            </a>
        </li>
        @endif
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Astrologer">Withdraw</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('astro-withdraw-request') }}" class="menu-link">
                        <div data-i18n="All Drivers">Pending</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('astro-complete-withdraw') }}" class="menu-link">
                        <div data-i18n="Approved Drivers">Completed</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('astro-rejected-request') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Rejected</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        {{-- ------------------------------------------Kundali------------------------------------------------ --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Kundli</span>
        </li>
        @endif
        @if(session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="{{ url('kundali') }}" class="menu-link">
                <i class="menu-icon tf-icons fas fa-atom"></i>
                <div data-i18n="Analytics">Kundali</div>
            </a>
        </li>
        @endif
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="PujariJi">Bookings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('pending-booking') }}" class="menu-link">
                        <div data-i18n="All Drivers">Pending</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('complete-booking') }}" class="menu-link">
                        <div data-i18n="Approved Drivers">Completed</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        {{-- ------------------------------------------Kundali------------------------------------------------ --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Muhurt</span>
        </li>
        @endif
        @if(session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="{{ url('muhurt') }}" class="menu-link">
                <i class="menu-icon tf-icons fas fa-atom"></i>
                <div data-i18n="Analytics">Muhurt</div>
            </a>
        </li>
        @endif
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="PujariJi">Bookings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('muhurt-pending-booking') }}" class="menu-link">
                        <div data-i18n="All Drivers">Pending</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('muhurt-complete-booking') }}" class="menu-link">
                        <div data-i18n="Approved Drivers">Completed</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
        {{-- ------------------------------------------Temple Booking------------------------------------------------ --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Temple Bookings</span>
        </li>
        @endif
        @if(session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa fas fa-om"></i>
                <div data-i18n="PujariJi">Temple Pooja</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('temple-list') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Temple</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('temple-pooja-list') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Pooja List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('temple-package-list') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Package List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('temple-inclusion-list') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Inclusion List</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa fas fa-place-of-worship"></i>
                <div data-i18n="PujariJi">Offline Pooja</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('temple-offline-pending-pooja') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Pending Booking</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('temple-offline-completed-pooja') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Completed Booking</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('temple-offline-cancelled-booking') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Cancel Request</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('temple-offline-completed-cancelled-booking') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Completed Cancel Request</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa fas fa-place-of-worship"></i>
                <div data-i18n="PujariJi">Online Pooja</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('temple-online-pending-pooja') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Pending Booking</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('temple-online-completed-pooja') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Completed Booking</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('temple-online-cancelled-booking') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Cancel Request</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('temple-online-completed-cancelled-booking') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Completed Cancel Request</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        {{-- ------------------------------------------E-commerce Booking------------------------------------------------ --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-t3ext">E-commerce</span>
        </li>
        @endif
        @if(session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="{{ url('products') }}" class="menu-link">
                <i class="menu-icon tf-icons fas fa-warehouse"></i>
                <div data-i18n="Analytics">Product List</div>
            </a>
        </li>
        @endif
        @if(session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="{{ url('shipping-cities') }}" class="menu-link">
                <i class="menu-icon tf-icons fas fa-shipping-fast"></i>
                <div data-i18n="Analytics">Shipping Cities</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ url('shipping-charge') }}" class="menu-link">
                <i class="menu-icon tf-icons fas fa-funnel-dollar"></i>
                <div data-i18n="Analytics">Shipping Charge</div>
            </a>
        </li>
        @endif
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="PujariJi">Order</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('pending-order') }}" class="menu-link">
                        <div data-i18n="All Drivers">Pending</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('delivered-order') }}" class="menu-link">
                        <div data-i18n="Approved Drivers">Delivered</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('cancelled-order') }}" class="menu-link">
                        <div data-i18n="Approved Drivers">Cancelled</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('refunded-order') }}" class="menu-link">
                        <div data-i18n="Approved Drivers">Refunded</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
        {{-- ------------------------------------------Event Booking------------------------------------------------ --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Event</span>
        </li>
        <li class="menu-item">
            <a href="{{ url('event') }}" class="menu-link">
                <i class="menu-icon tf-icons fas fa-calendar"></i>
                <div data-i18n="Analytics">Events</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="PujariJi">Bookings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('event-pending-booking') }}" class="menu-link">
                        <div data-i18n="All Drivers">Pending</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('event-complete-booking') }}" class="menu-link">
                        <div data-i18n="Approved Drivers">Completed</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('master_admin'))
        {{-- ------------------------------------------Upcoming Pooja------------------------------------------------ --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Upcoming Pooja</span>
        </li>
        <li class="menu-item">
            <a href="{{ url('upcoming-pooja') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-om"></i>
                <div data-i18n="Analytics">Upcomig Pooja</div>
            </a>
        </li>
        @endif
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('3') || session('type')==base64_encode('master_admin'))
        {{-- ------------------------------------------Pooja Booking------------------------------------------------ --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pooja Bookings</span>
        </li>
        @endif
        @if(session('type')==base64_encode('3') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="PujariJi">Pujari</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('pujariji-list') }}" class="menu-link">
                        <div data-i18n="All Drivers">Pujari Ji</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('pending-pujariji-list') }}" class="menu-link">
                        <div data-i18n="Approved Drivers">Pending Request</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('rejected-pujariji-list') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Rejected Request</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="PujariJi">Withdraw</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('withdraw-request') }}" class="menu-link">
                        <div data-i18n="All Drivers">Pending</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('complete-withdraw') }}" class="menu-link">
                        <div data-i18n="Approved Drivers">Completed</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('rejected-request') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Rejected</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa fas fa-om"></i>
                <div data-i18n="PujariJi">Pooja</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('pooja-pactegory') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Pooja Category</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('pooja-list') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Pooja List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('package-list') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Package List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('inclusion-list') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Inclusion List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('pooja-material') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Pooja Material</div>
                    </a>
                </li>

            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa fas fa-place-of-worship"></i>
                <div data-i18n="PujariJi">Offline Pooja</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('offline-pending-pooja') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Pending Booking</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('offline-completed-pooja') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Completed Booking</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('offline-cancelled-booking') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Cancel Request</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('offline-completed-cancelled-booking') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Completed Cancel Request</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa fas fa-place-of-worship"></i>
                <div data-i18n="PujariJi">Online Pooja</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('online-pending-pooja') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Pending Booking</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('online-completed-pooja') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Completed Booking</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('online-cancelled-booking') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Cancel Request</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('online-completed-cancelled-booking') }}" class="menu-link">
                        <div data-i18n="Pending Drivers">Completed Cancel Request</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('3') || session('type')==base64_encode('master_admin'))
        {{-- ------------------------------------------Blog------------------------------------------------ --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Blog</span>
        </li>
        @endif
        @if(session('type')==base64_encode('3') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxl-blogger"></i>
                <div data-i18n="Astrologer">Blog</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('blog-list') }}" class="menu-link">
                        <div data-i18n="All Drivers">Approved Blog</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('pending-blog-list') }}" class="menu-link">
                        <div data-i18n="">Pending Blog</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        {{-- ------------------------------------------Settings------------------------------------------------ --}}
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('1') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        {{-- ------------------------------------------Settings------------------------------------------------ --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Settings</span>
        </li>
        @endif
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="{{ url('extra-payment-history') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-coins"></i>
                <div data-i18n="Analytics">Extra Payments</div>
            </a>
        </li>
        @endif
        @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="{{ url('app-banner') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-picture-o"></i>
                <div data-i18n="Analytics">App Banner</div>
            </a>
        </li>
        @endif
        @if(session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="{{ url('language') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-language"></i>
                <div data-i18n="Analytics">Language</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ url('kathas') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-user"></i>
                <div data-i18n="Analytics">Kathas</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ url('astrology') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-user"></i>
                <div data-i18n="Analytics">Jyotishi</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ url('pooja-perform') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-user"></i>
                <div data-i18n="Analytics">Pooja Perform</div>
            </a>
        </li>
        @endif
        @if(session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="{{ url('raised-query') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-user"></i>
                <div data-i18n="Analytics">Raised Query</div>
            </a>
        </li>
        @endif
        @if(session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Astrologer">Vendor&nbsp;State/City</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('state-list') }}" class="menu-link">
                        <div data-i18n="All Drivers">State</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('city-list') }}" class="menu-link">
                        <div data-i18n="">City</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="{{ url('update-terms-condition') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-user"></i>
                <div data-i18n="Analytics">Term & Conditions</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ url('update-privacy-policies') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-user"></i>
                <div data-i18n="Analytics">Privacy Policy</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Astrologer">Send&nbsp;Notifications</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('send-vendor-notification') }}" class="menu-link">
                        <div data-i18n="All Drivers">Vendor</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('send-user-notification') }}" class="menu-link">
                        <div data-i18n="">Yajman</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('2') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Astrologer">Phone Contact</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('yajman-contact-details') }}" class="menu-link">
                        <div data-i18n="">Yajman</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('astrologer-contact-details') }}" class="menu-link">
                        <div data-i18n="All Drivers">Astrologer</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('kathavachak-contact-details') }}" class="menu-link">
                        <div data-i18n="All Drivers">Kathavachak</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('pujari-contact-details') }}" class="menu-link">
                        <div data-i18n="All Drivers">Pujari</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @if(session('type')==base64_encode('0') || session('type')==base64_encode('master_admin'))
        <li class="menu-item">
            <a href="{{ url('payment-history') }}" class="menu-link">
                <i class="menu-icon tf-icons fa fa-money"></i>
                <div data-i18n="Analytics">Total&nbsp;Payment&nbsp;History</div>
            </a>
        </li>
        @endif
    </ul>
    <div class="clear py-3" style="background-color: #1783f6; box-shadow: 0 2px 4px rgba(197, 203, 210, 0.5);"></div>
</aside>
<!-- / Menu -->
