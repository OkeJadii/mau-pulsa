@extends('user.layouts.main')

@section('content')
<header id="header">

</header>
<main id="main">
    <section id="faq" class="faq section-bg">
      @auth
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <p class="d-inline">ISI PULSA {{ $provider }}</p>  <img src="{{ asset('storage/' . $icon) }}" alt="{{ $title}}" width="50px" class="ms-2 pb-3">
        </div>

        <form method="POST" action="/pulsa/detail">
          @csrf
          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <b>
                  <p>No Handphone</p>
                </b>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <input type="text" class="form-control mt-3 mb-3" name="noHp" id="exampleFormControlInput1" placeholder="08xx" required/>
                </div>
              </li>
            </ul>
          </div>
          <br />
          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <div class="row justify-content-center">
                  @foreach ($pulsa as $p)
                  <div class="col-md-6 col-lg-4 p-0 mt-3" id="label">
                    <input type="radio" name="nominal" id="{{ $p->nominal }}" value="{{ $p->nominal }}-{{ $p->harga }}" required/>
                    <label for="{{ $p->nominal }}" class="shadow">
                      <h6 class="text-center"><b>{{ $p->provider->name }} - Rp{{ $p->nominal }}</b></h6>
                      <hr class="mb-2" size="3">
                      <p class="card-title text-center">Harga :</p>
                      <h5 class="card-text mb-2 harga text-center">Rp{{ $p->harga }}</h5>
                    </label>
                    <input type="hidden" name="provider" value="{{ $p->provider->name }}">
                  </div>
                  @endforeach

                  {{-- @foreach ($pulsa as $p)
                  <div class="col-md-6 col-lg-4">
                    <a href="#">
                      <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><b>{{ $p->provider->name }} - Rp{{ $p->nominal }}</b></li>
                        </ul>
                        <hr class="m-0 p-0 text-secondary">
                        <div class="card-body pt-2 pb-4">
                          <p class="card-title">Harga :</p>
                          <h5 class="card-text mb-2" style="color: red">Rp{{ $p->harga }}</h5>
                        </div>
                      </div>
                    </a>
                  </div>
                  @endforeach --}}

                </div>
                <button type="submit" class="btn-beli mt-5 border-0" style="width: 100%">BELI SEKARANG! <i class="fas fa-shopping-bag"></i></button>
              </li>
            </ul>
          </div>
        </form>
      </div>
      @else
      <div class="container">
        <div class="section-title-capitalize p-0" data-aos="fade-up">
            <h3 class="text-center">Login Terlebih Dahulu Sebelum Melakukan Transaksi!</h3>
        </div>
        <div class="container d-flex justify-content-center" data-aos="fade-up">
            <div class="col-md-6">
                <div class="d-flex justify-content-center img-fluid container">
                    <img src="img/login.png" alt="" class="w-75">
                </div>
            </div>
        </div>
      </div>
      @endauth
    </section>
  </main>

@endsection