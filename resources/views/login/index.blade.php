@extends('user.layouts.main')

@section('content')
<section id="hero">

  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Login Form
          </h4>

          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {!! session('success') !!}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {!! session('loginError') !!}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <form action="/login" method="POST" class="form-box px-3">
            @csrf
              <div class="form-input">
                <span><i class="fa fa-envelope-o"></i></span>
                <input type="email" name="email" id="email" placeholder="Email" required autofocus>
              </div>

              <div class="form-input">
                <span><i class="fa fa-key"></i></span>
                <input type="password" name="password" id="password" placeholder="Password" required>
              </div>

              <br>

              {{-- <div class="mb-3">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cb1" name="remember">
                  <label class="custom-control-label" for="cb1">Remember me</label>
                </div>
              </div> --}}

              <div class="mb-3">
                <button type="submit" class="button-login">
                  Login
                </button>
              </div>

              <hr class="my-4">

              <div class="text-center mb-2">
                Don't have an account?
                <a href="/register" class="register-link">
                  Register here
                </a>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28 " preserveAspectRatio="none">
    <defs>
      <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
    </defs>
    <g class="wave1">
      <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
    </g>
    <g class="wave2">
      <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
    </g>
    <g class="wave3">
      <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
    </g>
  </svg>

</section><!-- End Hero -->
@endsection