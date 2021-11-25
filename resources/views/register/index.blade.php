@extends('user.layouts.main')

@section('content')
<section id="hero">

  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Register Form
          </h4>

          <form action="/register" method="POST" class="form-box px-3">
          @csrf
              <div class="form-input">
                <span><i class="fas fa-user"></i></span>
                <input type="text" name="name" placeholder="Name" required class="@error('username') is-invalid @enderror" value="{{ old('name') }}"/>
                @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-input">
                <span><i class="far fa-user"></i></i></span>
                <input type="text" name="username" placeholder="Username" required class="@error('email') is-invalid @enderror" value="{{ old('username') }}" />
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-input">
                <span><i class="fa fa-envelope-o"></i></span>
                <input type="email" name="email" placeholder="Email" required class="@error('password') is-invalid @enderror" value="{{ old('email') }}" />
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              <div class="form-input">
                <span><i class="fa fa-key"></i></span>
                <input type="password" name="password" placeholder="Password" required />
              </div>

              <br>

              <div class="mb-3">
                <button type="submit" class="button-login">
                  Register
                </button>
              </div>

              <hr class="my-4">

              <div class="text-center mb-2">
                Already registered?
                <a href="/login" class="register-link">
                  Login here
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