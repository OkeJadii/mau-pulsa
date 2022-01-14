@extends('user.layouts.main')

@section('content')
<header id="header">

</header>
<section id="faq" class="faq section-bg">
<div class="container">
    <div class="faq-list" data-aos="fade-up">
        <div class="section-title-capitalize" data-aos="fade-up">
            <p class="text-center">PEMBAYARAN</p>
        </div>
        <ul>
            <li class="p-0">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-10 col-lg-7">
                        <div class="card my-4">
                            <div class="card-header">
                                <img src="/img/qris_logo.png" class="mx-auto" alt="qris" style="width: 60px;" >
                            </div>
                            <div class="row g-0">
                              <div class="col-md-4 my-auto">
                                    <img src="/img/qris_ewallet/{{ $harga }}.png" class="ms-2 img-fluid rounded-start" alt="qris {{ $harga }}">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body pt-3">
                                  <h6 class="card-title">TOTAL</h6>
                                  <hr class="mt-2">
                                  <div class="d-flex justify-content-between"> <p class="p-0">Nama Produk</p> <p class="p-0">{{ $produk }}</p> </div>
                                  <div class="d-flex justify-content-between"> <p class="p-0">Harga</p> <p class="p-0">{{ $nominal }}</p> </div>
                                  <div class="d-flex justify-content-between"> <p class="p-0">Biaya Admin</p> <p class="p-0">Rp0</p> </div>
                                  <div class="d-flex justify-content-between mt-3"> <span class="font-weight-bold">Total</span> <span class="font-weight-bold theme-color">{{ $harga }}</span> </div>
                                  <hr>
                                  {{-- <div class="d-flex justify-content-between"> <p class="p-0">Nama Produk</p> <p class="p-0">Pulsa Test</p> </div>
                                  <div class="d-flex justify-content-between"> <p class="p-0">Harga</p> <p class="p-0">Rp10.000</p> </div>
                                  <div class="d-flex justify-content-between"> <p class="p-0">Biaya Admin</p> <p class="p-0">Rp0</p> </div>
                                  <div class="d-flex justify-content-between mt-3"> <span class="font-weight-bold">Total</span> <span class="font-weight-bold theme-color">Rp10.000</span> </div>
                                  <hr> --}}
                                  <h6 class="text-center">Untuk menyelesaikan pembayaran dengan QRIS, buka aplikasi Ewallet atau M-Banking kamu dan scan kode QR</h6>
                                </div>
                              </div>
                            </div>
                          </div>
                          <a href="/history" class="btn btn-beli border-0 lh-lg" style="width: 100%; height: 33px">
                            SELESAI <i class="far fa-check-circle"></i>
                          </a>
                    </div>
                </div>
            </li>
        </ul>
      </div>

    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Bayar!
    </button> --}}

    <!-- Modal -->
    {{-- <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header text-center">
              <img src="/img/qris_logo.png" alt="" style="width: 15%;">
              <h4><b>Pembayaran</b> </h4>
              <h3 class="bi bi-x-circle-fill" data-bs-dismiss="modal"></h3>
            </div>
            <div class="modal-body ">
              <!-- <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div> -->
              <!-- <div class="px-4 py-5"> -->
              <h6 class="text-center">Untuk menyelesaikan pembayaran dengan QRIS, buka aplikasi Ewallet atau M-Banking kamu dan scan kode QR</h6>
              <img src="/img/qrcode.png" class="rounded mx-auto d-block" style="width: 60%;">
              <span class="theme-color">TOTAL</span>
              <div class="mb-3">
                <hr class="new1 font-weight-bold ">
              </div>
              <div class="d-flex justify-content-between"> <small>Nama Produk</small> <small>Pulsa</small> </div>
              <div class="d-flex justify-content-between"> <small>Harga</small> <small>Rp5000</small> </div>
              <div class="d-flex justify-content-between"> <small>Biaya Admin</small> <small>Rp 0</small> </div>
              <div class="d-flex justify-content-between mt-3"> <span class="font-weight-bold">Total</span> <span class="font-weight-bold theme-color">Rp5000</span> </div>
              <div class="text-center mt-5"> <button class="btn btn-beli">Selesai</button> </div>
            </div>
          </div>
        </div>
    </div> --}}

</div>
</section>
@endsection

