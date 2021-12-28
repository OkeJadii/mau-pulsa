@extends('user.layouts.main')

@section('content')
<header id="header">

</header>
<div class="container">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Bayar!
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                <img src="/img/GoPay-Logo.png" alt="" style="width: 20%;">
                    <h3 class="bi bi-x-circle-fill" data-bs-dismiss="modal"></h3>
                </div>
                <div class="modal-body ">
                    <!-- <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div> -->
                    <!-- <div class="px-4 py-5"> -->
                    <h5 class="text-center">Untuk menyelesaikan pembayaran dengan GO-PAY, buka aplikasi GO-JEK dan scan kode QR</h5>
                        <img src="/img/qrcode.png" class="rounded mx-auto d-block" style="width: 60%;">
                        <span class="theme-color">TOTAL</span>
                        <div class="mb-3">
                            <hr class="new1 font-weight-bold ">
                        </div>
                        <div class="d-flex justify-content-between"> <small>Nama Produk</small> <small>Pulsa Indosat</small> </div>
                        <div class="d-flex justify-content-between"> <small>Harga</small> <small>Rp 10.000</small> </div>
                        <div class="d-flex justify-content-between"> <small>Biaya Admin</small> <small>Rp 2.000</small> </div>
                        <div class="d-flex justify-content-between mt-3"> <span class="font-weight-bold">Total</span> <span class="font-weight-bold theme-color">Rp. 12.000</span> </div>
                        <div class="text-center mt-5"> <button class="btn btn-primary">Keluar</button> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

@endsection
    
