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
            @if(Auth::check())
            <!-- If the user is logged in -->
            <li>
              <a href="{{ url('logout') }}" class="nav-link">{{ __('Logout') }}</a>
            </li>
            @else
            <!-- If the user is not logged in -->
            <li>
              <a href="#" class="nav-link" id="loginBtn"><img alt="Login" loading="lazy" width="28" height="28" decoding="async" data-nimg="1" class="cursor-pointer" src="{{ asset('img/user.png') }}"></a>
            </li>
            @endif
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
  <!-- Login Modal -->
<div id="loginModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Login</h2>
    <form id="loginForm">
      @csrf
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Login</button>
    </form>
  </div>
</div>
</header>
<style type="text/css">
  /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4); /* Black with opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 30%; /* Width of the modal */
    border-radius: 10px;
}

/* Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

</style>
<script type="text/javascript">
  // Get the modal
// Show the modal when the login button is clicked
document.getElementById("loginBtn").onclick = function() {
    document.getElementById("loginModal").style.display = "block";
}

// Close the modal when the close button is clicked
document.querySelector(".close").onclick = function() {
    document.getElementById("loginModal").style.display = "none";
}

// Submit login form via AJAX
document.getElementById("loginForm").onsubmit = function(event) {
    event.preventDefault(); // Prevent default form submission

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    fetch('{{ route('login') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ email: email, password: password })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Hide the login modal
            document.getElementById("loginModal").style.display = "none";

            // Replace "Login" with "Logout"
            document.getElementById("loginBtn").style.display = "none";
            document.getElementById("logoutBtn").style.display = "inline-block";
        } else {
            alert("Login failed! Please check your credentials.");
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

// Handle logout
document.getElementById("logoutBtn").onclick = function() {
    fetch('{{ route('logout') }}', {
        method: 'GET'
    }).then(() => {
        document.getElementById("loginBtn").style.display = "inline-block";
        document.getElementById("logoutBtn").style.display = "none";
    });
}

</script>