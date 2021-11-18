@extends('admin.layouts.main')

@section('content')
  <div class="col mb-2">
    <h1 class="text-center">Form Edit Data Pulsa</h1>
  </div>

  <div class="col-lg-12">
    <div class="card py-3 border-left-primary shadow">
      <div class="card-body">
        <form method="POST" action="/admin/pulsa/{{ $pulsa->id }}">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="nominal">NOMINAL : </label>
            <input type="text" name="nominal" id="nominal" required autocomplete="off" class="form-control @error('nominal') is-invalid @enderror" placeholder="Nominal Pulsa.." value="{{ $pulsa->nominal }}">
            @error('nominal')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="harga">HARGA : </label>
            <input type="text" name="harga" id="harga" required autocomplete="off" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga Pulsa.." value="{{ $pulsa->harga }}">
            @error('harga')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <hr>
          <button class="btn btn-primary" type="submit">Ubah Data!</button>
        </form>
      </div>
    </div>
  </div>
@endsection

