@extends('layouts.main')

<!-- ======= Hero Section ======= -->
<section id="hero">

  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
        <div data-aos="zoom-out">
          <h1>Isi Ulang Pulsa Untungnya Makin Nyata Dengan <span>Maupulsa</span></h1>
          <br>
          <h2>Nikmati kemudahan transaksi dimana saja dan kapan saja dari genggaman anda.</h2>
          @auth
            <div class="text-center text-lg-start">
              <a href="#product" class="btn-get-started scrollto">Get Started</a>
            </div>
          @else
          <div class="text-center text-lg-start">
            <a href="/login" class="btn-get-started scrollto">Login</a>
          </div>
          @endauth
        </div>
      </div>
      <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
        <img src="assets/img/hero-img2.png" class="img-fluid animated" alt="">
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

<main id="main">

  <!-- ======= Product Section ======= -->
  <section id="product" class="features mt-4">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Product</h2>
        <p>Daftar Produk</p>
      </div>

      <div class="row" data-aos="fade-left">
        <div class="col-lg-3 col-md-4">
          <a href="/provider" style="color: black">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="50" style="transition: 1s">
            <i class="bi bi-phone" style="color: #ffbb2c;"></i>
            <h3>Pulsa</h3>
          </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <a href="/pln" style="color: black">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="150" style="transition: 1s">
            <i class="bi bi-lightning" style="color: #e80368;"></i>
            <h3>Listrik PLN</h3>
          </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <a href="/wallet" style="color: black">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="350" style="transition: 1s">
            <i class="fas fa-wallet" style="color: #11dbcf;"></i>
            <h3>Dompet Elektronik</h3>
          </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <a href="#" style="color: black">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="200" style="transition: 1s">
            <i class="fas fa-signal" style="color: #e361ff;"></i>
            <h3>Paket Data</h3>
          </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-4 mt-4">
          <a href="#" style="color: black">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="100" style="transition: 1s">
            <i class="bi bi-controller" style="color: #5578ff;"></i>
            <h3>Voucher Game</h3>
          </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-4 mt-4">
          <a href="#" style="color: black">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="250" style="transition: 1s">
            <i class="fas fa-phone-volume" style="color: #47aeff;"></i>
            <h3>Telkom</h3>
          </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-4 mt-4">
          <a href="#" style="color: black">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="300" style="transition: 1s">
            <i class="fas fa-tint" style="color: #ffa76e;"></i>
            <h3>PDAM</h3>
          </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-4 mt-4">
          <a href="#" style="color: black">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="400" style="transition: 1s">
            <i class="far fa-hospital" style="color: #4233ff;"></i>
            <h3>BPJS Kesehatan</h3>
          </div>
          </a>
        </div>
      </div>

    </div>
  </section>
  <!-- End Features Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg">
    <div class="container-fluid">

      <div class="row">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
          data-aos="fade-right">

        </div>
        <div
          class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
          data-aos="fade-left">
          <h3>Kenapa Top Up Pulsa di MauPulsa?</h3>
          <p>Nikmati kemudahan transaksi dimana saja dan kapan saja dari genggaman anda.</p>

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="far fa-thumbs-up"></i></div>
            <h4 class="title"><a href="">Praktis</a></h4>
            <p class="description"> Kapanpun dan dimanapun, nikmati beragam transaksi dapat dilakukan melalui website
              atau aplikasi. </p>
          </div>

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wifi"></i></div>
            <h4 class="title"><a href="">Online 24 Jam</a></h4>
            <p class="description"> Jam berapa pun kamu butuh pulsa, kapan pun dan di mana pun kamu memerlukannya,
              sistem kami Online 24 jam </p>
          </div>

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-user-shield"></i></div>
            <h4 class="title"><a href="">Aman</a></h4>
            <p class="description"> Pulsa Online memastikan semua informasi yang ada terjaga aman dalam setiap
              transaksi. </p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Details Section ======= -->
  <section id="details" class="details">
    <div class="container">

      <div class="row content">
        <div class="col-md-4" data-aos="fade-right">
          <img src="assets/img/details-2.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-4" data-aos="fade-up">
          <h3>Apakah Layanan Pulsa di MauPulsa Aman?</h3>
          <p class="fst-italic">
            MauPulsa berkomitmen untuk melindungi dan merahasiakan data pribadi Anda. Seluruh data atau informasi yang
            Anda masukkan selama proses pengajuan dilindungi menggunakan teknologi enkripsi dan keamanan termutakhir
            sehingga terlindungi dengan baik.
            Agar keamanan data pribadi Anda tetap selalu terjaga, berikut beberapa tips dan hal yang perlu
            diperhatikan:
          </p>
          <ul>
            <li><i class="bi bi-check"></i>Jangan pernah sembarangan memberikan informasi pribadi kepada siapapun di
              luar situs MauPulsa. Data pribadi yang dimaksud antara lain adalah informasi pribadi, sandi (password),
              KTP, Foto Selfie, NPWP, dll.</li>
            <li><i class="bi bi-check"></i>Jangan memberikan kode OTP yang masuk melalui SMS / e-mail kepada siapapun
              termasuk pihak-pihak yang mengatasnamakan diri sebagai MauPulsa.</li>
            <li><i class="bi bi-check"></i>Jangan pernah mempublikasikan data pribadi Anda di kolom komentar media
              sosial manapun agar tetap aman.</li>
            <li><i class="bi bi-check"></i>Website resmi MauPulsa hanya bisa diakses pada domain
              https://www.MauPulsa.com/. Mohon hati-hati apabila Anda menerima pesan atau informasi dari seseorang
              untuk mengakses/mengklik link tertentu di luar website atau akun media sosial resmi MauPulsa.</li>
          </ul>

        </div>
      </div>

    </div>
  </section>
  <!-- End Details Section -->

  <!-- ======= Gallery Section ======= -->
  <section id="offer" class="gallery">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Offer</h2>
        <p>Check our Offer</p>
      </div>

      <div class="row no-gutters" data-aos="fade-left">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
            <a href="assets/img/offer/telkom.png" class="gallery-lightbox">
              <img src="assets/img/offer/telkom.png" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
            <a href="assets/img/offer/indosat.png" class="gallery-lightbox">
              <img src="assets/img/offer/indosat.png" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
            <a href="assets/img/offer/kartu-xl.png" class="gallery-lightbox">
              <img src="assets/img/offer/kartu-xl.png" alt="" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
            <a href="assets/img/offer/tri.png" class="gallery-lightbox">
              <img src="assets/img/offer/tri.png" alt="" class="img-fluid">
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Gallery Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>F.A.Q</h2>
        <p>Frequently Asked Questions</p>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
              data-bs-target="#faq-list-1">Apa Itu Pulsa dan Top Up Pulsa? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
              <p>
                Pulsa adalah sebuah alat pembayaran pada jaringan seluler yang seringkali menganut sistem prabayar.
                Agar Anda dapat berkomunikasi melalui HP, Anda tentu perlu memiliki cukup pulsa pada kartu SIM yang
                dipakai.

                Untuk itu, agar pulsa pada kartu SIM selalu terisi, Anda perlu melakukan top up atau isi ulang pulsa.
                Tarif yang diberikan oleh operator seluler untuk setiap nominal pulsa tentu beragam. Biasanya, untuk
                membeli pulsa sebesar 5000, Anda perlu merogoh kocek hingga 6000 Rupiah.

                Tarif pulsa memang seringkali lebih mahal dibanding nominal pulsa yang Anda dapatkan. Salah satu
                alasannya adalah karena Anda harus membeli pulsa melalui retailer yang harus menaikkan harga untuk
                bisa mendapatkan keuntungan. Jadi, jangan kaget jika rata-rata harga pulsa lebih tinggi ketimbang
                isinya.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2"
              class="collapsed">Sejarah Dibalik Adanya Pulsa <i class="bx bx-chevron-down icon-show"></i><i
                class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Tahun 1994, sebuah satelit milik Telkom, Indosat, dan Bimagraha Telekomindo menjadi pionir dari adanya
                fasilitas GSM di Indonesia. Mengambil nama Satelindo, jaringan seluler di Indonesia mulai berkembang
                dan disusul dengan munculnya Telkomsel dan XL Axiata pada tahun 1995 dan tahun 1996.

                Awalnya sistem prabayar pada jaringan seluler di Indonesia menganut istilah kredit. Namun, karena
                kesalahan tafsir dari para pengguna jaringan seluler, istilah kredit tersebut lambat laun berubah
                menjadi pulsa. Istilah pulsa tersebut menjadi lebih populer ketimbang kredit dan pelanggan pun menjadi
                lebih sering menggunakan istilah tersebut hingga saat ini.

                Bahkan, KBBI memiliki mengartikan pulsa sebagai perhitungan biaya pada jaringan telepon. Jadi, istilah
                pulsa sebenarnya adalah sebuah kesalahan tafsir oleh masyarakat yang sebenarnya mengacu ke istilah
                kredit pada jaringan seluler prabayar.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3"
              class="collapsed">Keuntungan Beli Pulsa Online di MauPulsa <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Kebanyakan masyarakat mungkin melakukan pengisian pulsa secara konvensional. Padahal, pengisian pulsa
                dengan cara ini cukup tidak efektif. Pelayanan yang kurang baik juga seringkali membuat pulsa yang
                telah dibeli tidak langsung terkirim.

                Untuk mengatasi masalah tersebut, mungkin Anda perlu mulai memanfaatkan jasa pengisian pulsa secara
                online di MauPulsa. Berikut beberapa keuntungannya:
              </p>
              <p>
                - Mudah dan Praktis:
                Tidak perlu repot untuk keluar rumah, Anda dapat melakukan pengisian pulsa dari mana saja dan kapan
                saja di MauPulsa.
              </p>
              <p>
                - Harga Lebih Terjangkau:
                Harga pulsa yang Anda beli secara online juga seringkali lebih terjangkau dibanding dengan counter
                biasa pada umumnya. Bahkan, tak jarang akan ada promo potongan harga dan cashback saat Anda melakukan
                pembelian pulsa secara online.

                Harga pulsa yang dibeli secara online biasanya akan lebih murah dibandingkan Anda membeli lewat
                counter pulsa biasa atau lewat minimarket seperti Alfamart atau Indomaret. Membeli pulsa secara online
                bisa mendapatkan potongan harga Rp 2.000,- s.d. Rp 4.000,-.
              </p>
              <P>
                - Transaksi Aman dan Terjamin:
                Beli pulsa online di MauPulsa juga jauh lebih terpercaya. Proses pengiriman pulsa untuk dapat Anda
                terima juga bisa dibilang cepat. Jadi, Anda tidak perlu takut jikalau pulsa yang dibeli tidak segera
                masuk padahal sedang berada pada keadaan mendesak.
              </P>
              <p>
                - Nominal Pulsa Lebih Beragam:
                Membeli pulsa di MauPulsa juga memberikan Anda lebih banyak pilihan nominalnya. Dengan begitu, Anda
                dapat membeli pulsa dengan nominal yang sesuai dengan kebutuhan.
                quis
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4"
              class="collapsed">Apa Saja Operator Seluler yang Tersedia di MauPulsa? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Di awal perkembangannya pada tahun 1994, operator seluler di Indonesia kini telah cukup banyak
                berkembang. Hal ini dibuktikan dengan adanya beberapa pesaing baru pada bisnis di bidang operator
                seluler.
              </p>
              <p>
                Hingga saat ini, masyarakat dapat menggunakan beberapa operator seluler berbeda yaitu:
              </p>
              <p>
                <P>- Pulsa Telkomsel.</P>
                <p>- Pulsa XL.</p>
                <p>- Pulsa Tri (3).</p>
                <p>- Pulsa Indosat.</p>
                <p>- Pulsa Smartfren.</p>
                <p>- Pulsa Axis.</p>
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5"
              class="collapsed">Berapa Harga Pulsa yang Tersedia di MauPulsa? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Harga dan nominal pulsa yang tersedia di MauPulsa bervariasi tergantung operator seluler yang dipilih.
                Namun secara umum pengisian pulsa di MauPulsa.com bisa dilakukan dengan minimum nominal Rp 1000,-
                sampai dengan Rp 1.000.000,-. Apabila Anda ingin mengetahui nominal pulsa berapa saja yang tersdia
                untuk operator tertentu, bisa langsung memasukkan 4 digit nomor pertama dari nomor telepon yang
                diinginkan.
              </p>
            </div>
          </li>

        </ul>
      </div>

    </div>
  </section><!-- End F.A.Q Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>

      <div class="row">

        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Jl.Wayan Gentuh 16X Dalung, Kuta Utara, Badung, Bali</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>maupulsa2021@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+62 821 4624 4571</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
          <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
            <strong>Terimakasih Yaaa!</strong> Pesan kamu sudah kami terima.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>

          <form name="contact-form" role="form" class="contact-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" class="form-control" placeholder="Your Name" id="name" aria-describedby="name" name="name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" aria-describedby="email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" aria-describedby="subject" required autocomplete="off">
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="text-center mt-2">
              <button type="submit" class="btn-kirim">Send Message</button>

              <button class="text-center btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
            </div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-md-6">
                <div class="footer-info">
                    <h3>MauPulsa</h3>
                    <p class="pb-3"><em>"Semua yang kamu mau ada di MauPulsa"</em>
                    </p>
                    <p>
                        Jl.Wayan Gentuh 16X <br>
                        Dalung, Kuta Utara, Badung, Bali<br><br>
                        <strong>Phone :</strong> +62 821 4624 4571<br>
                        <strong>Email :</strong> maupulsa2021@gmail.com<br>
                    </p>
                    <div class="social-links mt-3">
                        <a href="https://www.instagram.com/mau.pulsa/" class="instagram" target="blank"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>MauPulsa</span></strong> <i class="bi bi-suit-heart-fill"></i>.
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbzCZY5lFzt91VC38eWyF4Vl-i4LCKA8GOtczpKQt1vf4bCpMc2jFFgqITYdQ-HDeseV/exec';
  const form = document.forms['contact-form'];
  const btnKirim = document.querySelector('.btn-kirim');
  const btnLoading = document.querySelector('.btn-loading');
  const myAlert = document.querySelector('.my-alert');

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    //ketika tombol submit diklik
    //tampilkan tombol loading, hilangkan tombol kirim
    btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');
    fetch(scriptURL, { method: 'POST', body: new FormData(form) })
      .then((response) => {
        //tampilkan tombol kirim, hilangkan tombol loading
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        //tampilkan alert
        myAlert.classList.toggle('d-none');
        //reset formnya
        form.reset();
        console.log('Success!', response);
      })
      .catch((error) => console.error('Error!', error.message));
  });
</script>
