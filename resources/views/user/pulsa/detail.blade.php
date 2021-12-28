@extends('user.layouts.main')

@section('content')
<header id="header">

</header>
<section id="faq" class="faq section-bg">

    <div class="container">
        <div class="section-title-capitalize" data-aos="fade-up">

            <p class="text-center">Pembayaran</p>
        </div>

        <div class="faq-list">
            <ul>
                <li data-aos="fade-up">
                    <i class="bi bi-check-circle icon-check"></i> <a data-bs-toggle="collapse" class="collapse"
                        data-bs-target="#faq-list-1">Detail Pembayaran<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">

                        <div class="faq-list">
                            <ul>
                                <hr>
                                <li data-aos="fade-up">
                                    <b>
                                        <p>Nama Produk</p>
                                    </b>
                                    <input type="text" class="form-control mt-3 mb-3" name="noHp"
                                        id="exampleFormControlInput1" placeholder="08xx" disabled />
                                    <b>
                                        <p>No Handphone</p>
                                    </b>
                                    <input type="text" class="form-control mt-3 mb-3" name="noHp"
                                        id="exampleFormControlInput1" placeholder="08xx" disabled />
                                    <b>
                                        <p>Harga</p>
                                    </b>
                                    <input type="text" class="form-control mt-3 mb-3" name="noHp"
                                        id="exampleFormControlInput1" placeholder="08xx" disabled />
                                    <b>
                                        <p>Total Pembayaran</p>
                                    </b>
                                    <input type="text" class="form-control mt-3 mb-3" name="noHp"
                                        id="exampleFormControlInput1" placeholder="08xx" disabled />

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
                    <i class="bi bi-check-circle icon-check"></i> <a data-bs-toggle="collapse" class="collapse"
                        data-bs-target="#faq-list-2">Detail Pembeli<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-chevron-up icon-close"></i></a>

                    <div id="faq-list-2" class="collapse show" data-bs-parent=".faq-list">

                        <div class="faq-list">
                            <ul>

                                <hr>
                                <li data-aos="fade-up">

                                    <b>
                                        <p>Masukkan Alamat Email</p>
                                    </b>
                                    <input type="text" class="form-control mt-3 mb-3" name="noHp"
                                        id="exampleFormControlInput1" placeholder="Email" required />
                                    <b>
                                        <p>No Handphone</p>
                                    </b>
                                    <input type="text" class="form-control mt-3 mb-3" name="noHp"
                                        id="exampleFormControlInput1" placeholder="No Handphone" required />
                                    <br>
                                    <p> *Bukti dan riwayat transaksi akan dikirim ke email anda.</p>
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
                    <i class="bi bi-check-circle icon-check"></i> <a data-bs-toggle="collapse" class="collapse"
                        data-bs-target="#faq-list-3">Pilih Metode Pembayaran<i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

                    <div id="faq-list-3" class="collapse show" data-bs-parent=".faq-list">

                        <div class="faq-list">
                            <ul>
                              <li data-aos="fade-up">
                                <div class="row jusify-content-center">

                                  <div class="col-md-6 col-lg-3 p-0 mt-2" id="label">
                                    <input type="radio" name="nominal"  required/>
                                    <label  class="shadow">
                                        <div class="d-flex ">
                                            <div class="p-2 bd-highlight">

                                                <img alt="logo Kredivo"
                                                    src="https://alterrachital.s3.amazonaws.com/kredivo-40px_eDoKcK8.svg"
                                                    class="base-image">

                                            </div>
                                            <div class="p-2 bd-highlight">
                                                <p>Kredivo</p>
                                            </div>

                                        </div>
                                    </label>
                                    <input type="hidden" name="provider" >
                                  </div>

                                  <div class="col-md-6 col-lg-3 p-0 mt-2" id="label">
                                    <input type="radio" name="nominal"  required/>
                                    <label  class="shadow">
                                        <div class="d-flex flex-row bd-highlight ">
                                            <div class="p-2 bd-highlight">

                                                <img alt="logo Gopay"
                                                    src="https://alterrachital.s3.amazonaws.com/gopay-40px_Ap6i7pt.svg"
                                                    class="base-image">

                                            </div>
                                            <div class="p-2 bd-highlight ">
                                                <p>Gopay</p>
                                            </div>

                                        </div>
                                    </label>
                                    <input type="hidden" name="provider" >
                                  </div>

                                  <div class="col-md-6 col-lg-3 p-0 mt-2" id="label">
                                    <input type="radio" name="nominal"  required/>
                                    <label  class="shadow">
                                        <div class="d-flex flex-row bd-highlight ">
                                            <div class="p-2 bd-highlight">

                                                <img alt="logo DANA" src="https://alterrachital.s3.amazonaws.com/dana-40px.svg" class="base-image">

                                            </div>
                                            <div class="p-2 bd-highlight ">
                                                <p>Dana</p>
                                            </div>

                                        </div>
                                    </label>
                                    <input type="hidden" name="provider" >
                                  </div>

                                  <div class="col-md-6 col-lg-3 p-0 mt-2" id="label">
                                    <input type="radio" name="nominal"  required/>
                                    <label  class="shadow">
                                        <div class="d-flex flex-row bd-highlight ">
                                            <div class="p-2 bd-highlight">

                                                <img alt="logo ShopeePay" src="https://alterrachital.s3.amazonaws.com/shopeepay-40px_Qac5YNN.svg" class="base-image">

                                            </div>
                                            <div class="p-2 bd-highlight ">
                                                <p>ShopeePay</p>
                                            </div>

                                        </div>
                                    </label>
                                    <input type="hidden" name="provider" >
                                  </div>



                                </div>

                              </li>
                            </ul>
                          </div>


                    </div>
                </li>

            </ul>
            </li>

            </ul>

            <div class="card">
                <div class="card-header">
                  Total Pembayaran : 5000
                </div>
                <div class="card-body">
                    <button type="submit" class="btn-beli border-0" style="width: 100%">BAYAR SEKARANG! <i class="fas fa-shopping-bag"></i></button>
                </div>
              </div>
        </div>



    </div>
    </li>
    </ul>
    </div>







    </div>

</section>
@endsection