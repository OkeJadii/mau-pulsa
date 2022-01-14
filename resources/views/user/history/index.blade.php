@extends('user.layouts.main')

@section('content')
<header id="header">

</header>
<main id="main">
    <section id="faq" class="faq section-bg">
      <div class="container">
        <div class="section-title-capitalize">
          <p>RIWAYAT TRANSAKSI</p>
          <hr class="m-0">
        </div>
        <div class="faq-list">
          @if ($transactions->count())
          <ul class="list-inline">
            @foreach ($transactions as $transaction)
              <li data-aos="fade-up" class="rounded-3 shadow list-inline-item history">
                <img src="/img/produk_icon/{{ $transaction["produk"] }}.png" alt="" width="40px">
                <a data-bs-toggle="collapse" class="collapsed d-inline ps-2" data-bs-target="#faq-list-{{ $transaction["id"] }}">{{ $transaction["produk"] }} - {{ $transaction["nominal"] }}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-{{ $transaction["id"] }}" class="collapse" data-bs-parent=".faq-list">
                  <p class="mx-5 px-2">
                    Produk : {{ $transaction["produk"] }}
                  </p>
                  <p class="mx-5 px-2">
                    Nomor : {{ $transaction["no_pelanggan"] }}
                  </p>
                  <p class="mx-5 px-2">
                    Nominal : {{ $transaction["nominal"] }}
                  </p>
                  <p class="mx-5 px-2">
                    Harga : {{ $transaction["harga"] }}
                  </p>
                </div>
                <p class="mx-5 px-2 text-secondary" style="font-size: 12pt">{{ $transaction->created_at->diffForHumans() }}</p>
                @if ($transaction["status"] == 0)
                <span class="mx-5 px-2 badge bg-warning text-dark">Verivikasi Pembayaran</span>
                @elseif($transaction["status"] == 1)
                <span class="mx-5 px-2 badge bg-secondary text-light">Transaksi Diproses</span>
                @elseif($transaction["status"] == 2)
                <span class="mx-5 px-2 badge bg-danger text-light">Transaksi Gagal</span>
                @else
                <span class="mx-5 px-2 badge bg-success text-light">Transaksi Suksess</span>
                @endif
              </li>
            @endforeach
          </ul>
          @else
          <div class="container">
            <div class="section-title-capitalize p-0" data-aos="fade-up">
                <h3 class="text-center my-5">Anda Belum Melakukan Transaksi Apapun!</h3>
            </div>
          </div>
          @endif
        </div>
      </div>
    </section>
  </main><!-- End #main -->
@endsection