@extends('user.layouts.main')

@section('content')
<header id="header">

</header>
<section id="faq" class="faq section-bg">
    <div class="container">
      <div class="section-title-capitalize" data-aos="fade-up">
        <p class="text-center">Detail Pesanan</p>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up">
            <i class="bi bi-check-circle icon-check"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Detail Pembelian<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
              <div class="faq-list">
                <ul>
                  <hr>
                  <li data-aos="fade-up">
                    <b>
                      <p class="">Nama Produk : </p>
                    </b>
                    <h5 class=" fw-normal ms-2 mt-2 mb-3">Pulsa {{ $provider }}</h5>
                    <hr>
                    <b>
                      <p class="">No Handphone :</p>
                    </b>
                    <h5 class=" fw-normal ms-2 mt-2 mb-3">{{ $noHp }}</h5>
                    <hr>
                    <b>
                      <p class="">Nominal :</p>
                    </b>
                    <h5 class=" fw-normal ms-2 mt-2 mb-3">{{ $nominal }}</h5>
                    <hr>
                    <b>
                      <p class="">Harga :</p>
                    </b>
                    <h5 class=" fw-normal ms-2 mt-2 mb-3">{{ $harga }}</h5>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up">
            <i class="bi bi-info-circle icon-check"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-2">Info Pembeli<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse show" data-bs-parent=".faq-list">
              <div class="faq-list">
                <ul>
                  <hr>
                  <li data-aos="fade-up">
                  <form action="/pulsa/transaction" method="POST">
                    @csrf
                    <b>
                      <p>Masukkan Alamat Email Anda</p>
                    </b>
                    <input type="text" class="form-control mt-3 mb-3" name="email" id="email" placeholder="Email" required />

                    <ul class="mt-4 pt-2 ms-4" style="list-style-type: circle">
                        <li style="color: #ff6a24" class="p-0">Transaksi akan diproses maksimal 1x24 jam.</li>
                        <li style="color: #ff6a24;" class="p-0">Bukti transaksi akan dikirimkan ke email anda.</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>

          <div class="card" data-aos="fade-up">
            <div class="card-header">
              Total Pembayaran : {{ $harga }}
            </div>
            <div class="card-body">

                <input type="hidden" name="produk" value="{{ $provider }}">
                <input type="hidden" name="no_pelanggan" value="{{ $noHp }}">
                <input type="hidden" name="nominal" value="{{ $nominal }}">
                <input type="hidden" name="harga" value="{{ $harga }}">
                {{-- <a href="/bayar" class="btn btn-beli border-0" style="width: 100%">
                  BAYAR SEKARANG! <i class="far fa-money-bill-alt"></i>
                </a> --}}
                <button type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn-beli border-0" style="width: 100%">
                  BAYAR SEKARANG! <i class="far fa-money-bill-alt"></i>
                </button>
              </form>
            </div>
          </div>
      </div>

    </div>

  </section>
@endsection