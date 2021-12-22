@extends('user.layouts.main')

@section('content')
<header id="header">

</header>
<main id="main">
    <section id="faq" class="faq section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <p class="d-inline">TOP UP SALDO {{ $ewallet }}</p>  <img src="{{ asset('storage/' . $icon) }}" alt="{{ $title}}" width="70px" class="ms-1 pb-3">
        </div>

        <form method="POST" action="/pulsa-detail">
          @csrf
          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <b>
                  <p>No Pelanggan</p>
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
                <div class="row jusify-content-center">
                  @foreach ($ewalletprices as $ewalletprice)
                  <div class="col-md-6 col-lg-4 p-0 mt-3" id="label">
                    <input type="radio" name="nominal" id="{{ $ewalletprice->nominal }}" value="{{ $ewalletprice->nominal }}-{{ $ewalletprice->harga }}" required/>
                    <label for="{{ $ewalletprice->nominal }}" class="shadow">
                      <h6 class="text-center"><b>{{ $ewalletprice->ewallet->name }} - Rp{{ $ewalletprice->nominal }}</b></h6>
                      <hr class="mb-2" size="3">
                      <p class="card-title text-center">Harga :</p>
                      <h5 class="card-text mb-2 harga text-center">Rp{{ $ewalletprice->harga }}</h5>
                    </label>
                    <input type="hidden" name="provider" value="{{ $ewalletprice->ewallet->name }}">
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
    </section>
    <!-- End F.A.Q Section -->
  </main>

@endsection