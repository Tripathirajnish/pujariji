<style>
    .navbar-fixed {
        background-color: #fff;
        top: 0px;
        position: sticky;
    }
</style>
@php
    $ad_pic = DB::table('admins')->where('admin_id',base64_decode(session('login_id')))->first();
@endphp
{{-- <nav class="layout-navbar container-xxl navbar navbar-expand-xl align-items-center bg-navbar-theme navbar-fixed" id="layout-navbar" style="background: linear-gradient(to right, rgba(0, 0, 0, 0.674) 0%, rgb(181, 181, 181) 100%);"> --}}
<nav class="layout-navbar container-xxl navbar navbar-expand-xl align-items-center bg-navbar-theme navbar-fixed" id="layout-navbar" style="background:#007bff !important">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center m-4 text-white">
                {{-- <i class="bx bx-user fs-4 lh-0"></i> --}}
                {{-- <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                    aria-label="Search..." /> --}}
                <span class="fs-4 fw-bold">
                    @if(session('type')==base64_encode('master_admin'))
                        Master Admin
                    @elseif(session('type')==base64_encode('0'))
                        Account Admin
                    @elseif(session('type')==base64_encode('1'))
                        Event Admin
                    @elseif(session('type')==base64_encode('2'))
                        Customer Support Admin
                    @elseif(session('type')==base64_encode('3'))
                        Pandit Ji Admin
                    @endif
                </span>
            </div>
        </div>
        <!-- /Search -->

        <div class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->
            {{-- <li class="nav-item lh-1 me-3">
                <a class="github-button" href="https://github.com/themeselection/sneat-html-admin-template-free" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
            </li> --}}

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        @if(isset($ad_pic->image))
                        <img src="{{ url('assets/img/admin/'.$ad_pic->image) }}" alt class="w-px-40 h-px-48 rounded-circle" />
                        @else
                            <img src="{{ url('front/img/Pujari_Ji-removebg-preview.png')}}" alt class="w-px-40 h-px-48 rounded-circle" />
                        @endif
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        @if(isset($ad_pic->image))
                                        <img src="{{ url('assets/img/admin/'.$ad_pic->image) }}" alt class="w-px-40 h-px-48 rounded-circle" />
                                        @else
                                            <img src="{{ url('front/img/Pujari_Ji-removebg-preview.png')}}" alt class="w-px-40 h-px-48 rounded-circle" />
                                        @endif
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">
                                        @if(isset($ad_pic->name))
                                            {{ $ad_pic->name }}
                                        @endif
                                    </span>
                                    <small class="text-muted">
                                        @if(session('type')==base64_encode('master_admin'))
                                            Master Admin
                                        @elseif(session('type')==base64_encode('0'))
                                            Account Admin
                                        @elseif(session('type')==base64_encode('1'))
                                            Event Admin
                                        @elseif(session('type')==base64_encode('2'))
                                            Customer Support Admin
                                        @elseif(session('type')==base64_encode('3'))
                                            Pandit Ji Admin
                                        @endif
                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    @if(session('type')==base64_encode('master_admin'))
                    <li>
                        <a class="dropdown-item" href="{{ url('my-profile') }}">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li> --}}

                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    @endif
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->
            </ul>
        </div>
</nav>
