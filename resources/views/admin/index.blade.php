@extends('admin.layouts.main')

@section('content')
  <div class="row mb-2">
    <h1>Dashboard</h1>
  </div>

  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Penghasilan (Total)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp215.000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Users</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">150 Orang</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Produk Tersedia</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">2 Produk</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="row justify-content-around">

    <div class="col-md-4 mb-4" id="top3">
      <div class="card shadow mb-4">
        <div class="card-header py-3 text-center bg-primary">
          <h6 class="m-0 font-weight-bold border-0 text-white text-center">DATA USER</h6>
        </div>
        <div class="card-body">
          <div class="row">
              <div class="col-lg-12 ">
                <h5 class="h5 mb-0 text-gray-800 text-center"><b>Name</b></h5>
                <h6 class="h6 mb-0 text-gray-800 text-center">Username</h6>
                <h6 class="h6 mb-0 text-gray-800 text-center">Email</h6>
              </div>

              <div class="col-lg-12 mb-2">
                <!-- Divider -->
                <hr class="sidebar-divider ">
              </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <center>
                <a href="#" class="btn btn-primary btn-md mt-4">
                  <i class="fas fa-eye"></i>
                  Lihat semua Users
                </a>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4" id="top3">
      <div class="card shadow mb-4">
        <div class="card-header py-3 text-center bg-success">
          <h6 class="m-0 font-weight-bold border-0 text-white text-center">DATA TRANSAKSI</h6>
        </div>
        <div class="card-body">
          <div class="row">
              <div class="col-lg-12 ">
                <h5 class="h5 mb-0 text-gray-800 text-center"><b>Name</b></h5>
                <h6 class="h6 mb-0 text-gray-800 text-center">Username</h6>
                <h6 class="h6 mb-0 text-gray-800 text-center">Email</h6>
              </div>

              <div class="col-lg-12 mb-2">
                <!-- Divider -->
                <hr class="sidebar-divider ">
              </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <center>
                <a href="#" class="btn btn-success btn-md mt-4">
                  <i class="fas fa-eye"></i>
                  Lihat semua Transaksi
                </a>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4" id="top3">
      <div class="card shadow mb-4">
        <div class="card-header py-3 text-center bg-danger">
          <h6 class="m-0 font-weight-bold border-0 text-white text-center">DATA PULSA</h6>
        </div>
        <div class="card-body">
          <div class="row">
            @foreach ($pulsa as $p)
            <div class="col-lg-12 ">
              <h5 class="h5 mb-0 text-gray-800 text-center"><b>{{ $p->nominal }}</b></h5>
              <h6 class="h6 mb-0 text-gray-800 text-center">{{ $p->harga }}</h6>
            </div>

            <div class="col-lg-12">
              <!-- Divider -->
              <hr class="sidebar-divider ">
            </div>
            @endforeach
          </div>

          <div class="row">
            <div class="col-lg-12">
              <center>
                <a href="/admin/pulsa" class="btn btn-danger btn-md mt-4">
                  <i class="fas fa-eye"></i>
                  Lihat semua Data
                </a>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection