@extends('admin.layouts.main')

@section('content')
  <div class="col mb-2">
    <h1 class="text-center">Form Edit Data Transaksi</h1>
  </div>

  <div class="col-lg-12">
    <div class="card py-3 border-left-primary shadow">
      <div class="card-body">
        <form method="POST" action="/admin/transaction/{{ $transaction->id }}">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="produk">PRODUK : </label>
            <input type="text" name="produk" id="produk" required autocomplete="off" class="form-control @error('produk') is-invalid @enderror" placeholder="Produk transaction.." value="{{ $transaction->produk }}">
            @error('produk')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="nominal">NOMINAL : </label>
            <input type="text" name="nominal" id="nominal" required autocomplete="off" class="form-control @error('nominal') is-invalid @enderror" placeholder="Nominal transaction.." value="{{ $transaction->nominal }}">
            @error('nominal')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="harga">HARGA : </label>
            <input type="text" name="harga" id="harga" required autocomplete="off" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga transaction.." value="{{ $transaction->harga }}">
            @error('harga')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="status">STATUS : </label>
            <select class="form-select" name="status">
              <option value="0" selected>Verifikasi Pembayaran</option>
              <option value="1">Transaksi Diproses</option>
              <option value="2">Transaksi Gagal</option>
              <option value="3">Transaksi Suksess</option>
            </select>
          </div>
          <hr>
          <button class="btn btn-primary" type="submit">Ubah Data!</button>
        </form>
      </div>
    </div>
  </div>
@endsection

