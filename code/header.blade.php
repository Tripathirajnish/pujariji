@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success'
            , title: 'Successfull'
            , text: "{{ session('success') }}"
        , })

    </script>
    @endif
    @if(session('fail'))
    <script>
        Swal.fire({
            icon: 'error'
            , title: 'Oops...'
            , text: "{{ session('fail') }}"
        , })

    </script>
    @endif

<header class="site-navbar js-sticky-header site-navbar-target" role="banner" style="box-shadow: 0px 1px 8px 0px rgb(77 160 22 / 100%);">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-6 col-lg-2">
        <h1 class="mb-0 site-logo">
            <a href="{{ url('/') }}" class="mb-0" style="font-size: 25px; font-weight: 600;">
                <img src="{{ url('front/img/logo-new.png') }}" alt="Pujari Ji" style="width: 100%;">
            </a>
        </h1>
      </div>
      <div class="col-12 col-md-10 d-none d-lg-block">
        <nav class="site-navigation position-relative text-right" role="navigation" style="display:inline-block;">
          <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
            <li><a href="{{ url('/home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : ''}}">{{$menu['home']}}</a></li>
            <li><a href="{{ url('puja')}}" class="nav-link {{ request()->routeIs('puja') ? 'active' : ''}}">{{$menu['puja']}}</a></li>
            <li>
              <a href="{{ url('blog')}}" class="nav-link {{ request()->routeIs('blogs') ? 'active' : ''}}">{{$menu['blog']}}</a>
            </li>
            <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.app.pujari_ji" class="nav-link {{ request()->routeIs('asPujariJi') ? 'active' : ''}}">{{$menu['pujariJi']}}</a></li>
            <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.astropujariji.customer">{{$menu['astrology']}}</a></li>
            <li>
            <div class="dropdown" style="display:inline-block;left: 8.6%;">
              <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{ app()->getLocale() == 'en' ? $menu['english'] : $menu['hindi'] }}
              <span class="caret"></span></button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ url('lang/en') }}">{{$menu['english']}}</a>
                <a class="dropdown-item" href="{{ url('lang/hi') }}">{{$menu['hindi']}}</a>
              </div>
            </div>
            </li>
          </ul>
        </nav>
          
      </div>
      

      <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">
        <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      
      </div>
    </div>
  </div>
</header>
