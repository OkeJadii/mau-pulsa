@extends('user.layouts.main')

@section('content')
<header id="header">

</header>
<main id="main">
    <section id="features" class="features">
        <div class="container">
            <div class="section-title-capitalize" data-aos="fade-up">
                <p>Daftar Provider Pulsa</p>
            </div>

            <div class="row justify-content-center" data-aos="fade-left">
                @foreach ($providers as $provider)
                <div class="col-lg-4 col-md-3 mt-3">
                    <a href="/pulsa?provider={{ $provider->slug }}" style="color: black">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                        <i class="bi bi-phone" style="color: #e80368;"></i>
                        <h3>{{ $provider->name }}</h3>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </section>


    <section id="faq" class="faq section-bg">
        <div class="container">
            <div class="section-title-capitalize" data-aos="fade-up">
                <p>Keuntungan Bertansaksi Online Di MauPulsa</p>
            </div>
            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                            data-bs-target="#faq-list-1">Beli Pulsa di MauPulsa Mudah, Cepat, Tidak Ribet <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Kehabisan pulsa di zaman serba online ini? MauPulsa menyediakan layanan isi ulang pulsa
                                kapan saja dan
                                dengan segala macam metode pembayaran. Tidak perlu lagi kesulitan online tengah malam
                                karena layanan
                                isi ulang pulsa di MauPulsa aktif 24 jam dan support segala macam jenis pembayaran. Isi
                                ulang pulsa
                                operator Telkomsel, Indosat, XL, Tri, Axis, Bolt, dan Smartfren dengan beragam nominal
                                yang tersedia
                                mulai dari 5.000, 10.000 sampai 500.000, semua hadir untuk kemudahan anda membeli pulsa
                                secara online.
                                isinya.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-2" class="collapsed">Banyak Jenis Pembayaran yang Tersedia<i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Berbagai jenis pembayaran yang kami sediakan seperti Kredivo, Debit BCA, Mandiri, VCN
                                BNI, CIMB Niaga,
                                Bank Mega dan ANZ sangat reliable dan cocok untuk anda yang mengutamakan kemudahan dan
                                kecepatan dalam
                                bertransaksi, anda cukup isi nomor handphone anda, memlih nominal pulsa yang anda
                                inginkan, kemudian
                                pilih metode pembayaran yang paling sesuai dengan Anda.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-4" class="collapsed">Menyediakan Berbagai Macam Pelayanan<i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Bukan pulsa yang anda cari? Kami juga menyediakan berbagai macam layanan lainnya seperti
                                isi ulang
                                paket data untuk anda yang butuh kuota internet dengan harga murah, pembayaran BPJS,
                                Pembayaran PLN,
                                cicilan, tagihan Telkom, dan PDAM semua dengan proses yang sangat mudah, cepat, dan
                                customer service
                                yang aktif pada Senin - Minggu pukul 08.00 - 22.00 WIB.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-5" class="collapsed">Keuntungan yang diperoleh <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                <b>Mudah</b>, Beragam transaksi yang kamu lakukan di MauPulsa dapat diselesaikan hanya
                                dengan beberapa
                                klik.

                                <br><b>Praktis</b>, Kamu bisa bertransaksi kapanpun dan di manapun melalui website dan
                                aplikasi
                                MauPulsa.

                                <br><b>Transaksi Aman</b>, MauPulsa menggunakan Secure Sockets Layer (SSL) dan 3D Secure
                                yang
                                memastikan semua informasi terjaga dalam setiap transaksi.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section>
</main><!-- End #main -->
@endsection