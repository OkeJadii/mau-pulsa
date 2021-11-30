@extends('user.layouts.main')

@section('content')
<header id="header">

</header>
<main id="main">
    <section id="faq" class="faq section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <p>ISI PULSA {{ $provider }}</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <b>
                <p>No Handphone</p>
              </b>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <input type="text" class="form-control mt-3 mb-3" id="exampleFormControlInput1" placeholder="08xx" />
              </div>
            </li>
          </ul>
        </div>
        <br />
        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <div class="row jusify-content-center">
                @foreach ($pulsa as $p)
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
                @endforeach

                {{-- <div class="col">
                  <a href="">
                    <div class="card mt-4">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Telkomsel Rp 5.000</b></li>
                      </ul>
                      <div class="card-body">
                        <p class="card-title">Harga</p>
                        <h5 class="card-text mt-2 mb-4" style="color: red">Rp 7.000</h5>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col">
                  <a href="#">
                    <div class="card mt-4">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Telkomsel Rp 5.000</b></li>
                      </ul>
                      <div class="card-body">
                        <p class="card-title">Harga</p>
                        <h5 class="card-text mt-2 mb-4" style="color: red">Rp 7.000</h5>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col">
                  <a href="#">
                    <div class="card mt-4">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Telkomsel Rp 5.000</b></li>
                      </ul>
                      <div class="card-body">
                        <p class="card-title">Harga</p>
                        <h5 class="card-text mt-2 mb-4" style="color: red">Rp 7.000</h5>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col">
                  <a href="#">
                    <div class="card mt-4 mb-4">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Telkomsel Rp 5.000</b></li>
                      </ul>
                      <div class="card-body">
                        <p class="card-title">Harga</p>
                        <h5 class="card-text mt-2 mb-4" style="color: red">Rp 7.000</h5>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col">
                  <a href="#">
                    <div class="card mt-4">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Telkomsel Rp 5.000</b></li>
                      </ul>
                      <div class="card-body">
                        <p class="card-title">Harga</p>
                        <h5 class="card-text mt-2 mb-4" style="color: red">Rp 7.000</h5>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col">
                  <a href="#">
                    <div class="card mt-4">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Telkomsel Rp 5.000</b></li>
                      </ul>
                      <div class="card-body">
                        <p class="card-title">Harga</p>
                        <h5 class="card-text mt-2 mb-4" style="color: red">Rp 7.000</h5>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="col">
                  <a href="#">
                    <div class="card mt-4">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Telkomsel Rp 5.000</b></li>
                      </ul>
                      <div class="card-body">
                        <p class="card-title">Harga</p>
                        <h5 class="card-text mt-2 mb-4" style="color: red">Rp 7.000</h5>
                      </div>
                    </div>
                  </a>
                </div> --}}
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- End F.A.Q Section -->
  </main>

@endsection