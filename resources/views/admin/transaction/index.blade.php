@extends('admin.layouts.main')

@section('content')
  <div class="col-lg-12">
    <h1 class="text-center">Tabel Data Transaksi</h1>
  </div>
  @if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
      <i class="fas fa-check-circle"></i> {!! session('success') !!}
    </div>
  @endif

  <!-- DataTales -->
  <div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Transaksi</h6>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        @if ($transactions->count())
        <div class="d-flex justify-content-between">
          {{ $transactions->links() }}
        </div>
        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>User</th>
              <th>Produk</th>
              <th>No-Pelanggan</th>
              <th>Nominal</th>
              <th>Harga</th>
              <th>Email</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          @foreach ($transactions as $transaction)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $transaction->user->username }}</td>
              <td>{{ $transaction->produk }}</td>
              <td>{{ $transaction->no_pelanggan }}</td>
              <td>{{ $transaction->nominal }}</td>
              <td>{{ $transaction->harga }}</td>
              <td>{{ $transaction->email }}</td>
              <td>@if ($transaction["status"] == 0)
                <span class="badge bg-warning text-dark">Verivikasi Pembayaran</span>
                @elseif($transaction["status"] == 1)
                <span class="badge bg-secondary text-light">Transaksi Diproses</span>
                @elseif($transaction["status"] == 2)
                <span class="badge bg-danger text-light">Transaksi Gagal</span>
                @else
                <span class="badge bg-success text-light">Transaksi Suksess</span>
                @endif
              </td>
              <td>
                <a href="/admin/transaction/{{ $transaction->id }}/edit" class="btn-primary btn"><i class="fas fa-edit"></i></a>
                {{-- <form action="/admin/transaction/{{ $transaction->id }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn-danger btn border-0" onclick="return confirm('ANDA YAKIN MENGHAPUS DATA INI?')"><i class="fas fa-trash-alt"></i></button>
                </form> --}}
            </tr>
          @endforeach
        </table>
        @else
        <h4 class="text-center">Belum Ada Transaksi</h4>
        @endif
      </div>
    </div>
  </div>
@endsection