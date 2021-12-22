<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
  <div class="container d-flex align-items-center justify-content-between">
    <div class="logo">
      <h1><a href="/"><img src="/assets/img/mp2.png" alt=""></a></h1>
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : ''}}" href="/">Home</a></li>
        {{-- <li><a class="nav-link scrollto {{ Request::is('pulsa') ? 'active' : ''}}" href="/">Product</a></li> --}}
        <li class="dropdown"><a href="#" class="{{ Request::is('pulsa') ? 'active' : ''}} {{ Request::is('provider') ? 'active' : ''}}"><span>Product</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="/provider">Pulsa</a></li>
            <li><a href="/pln">PLN</a></li>
            <li><a href="/ewallet">E-Wallet</a></li>
            <li><a href="#">Paket Data</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="/">About</a></li>
        <li><a class="nav-link scrollto" href="/">Contact</a></li>
        @auth
        <li><a class="nav-link scrollto" href="/history">History<i class="fas fa-history"></i></a> </li>
        <li class="dropdown"><a href="#"><span>Hii, {{ auth()->user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#"><span><i class="fas fa-user"></i> Profile</span></a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item" style="color: rgba(136, 1, 35, 0.9);"><i class="fas fa-sign-out-alt"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li>
          <a href="/login" class="nav-link {{ Request::is('login') ? 'active' : ''}} {{ Request::is('register') ? 'active' : ''}}">Login <i class="fas fa-sign-in-alt"></i></a>
        </li>
        @endauth
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!-- .navbar -->
  </div>
</header><!-- End Header -->
