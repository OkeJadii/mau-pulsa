@extends('admin.layouts.main')

@section('content')
  <div class="col mb-2">
    <h1 class="text-center">Form Tambah Data Pulsa</h1>
  </div>

  <div class="col-lg-12">
    <div class="card py-3 border-left-primary shadow">
      <div class="card-body">
        <form method="POST" action="/admin/pulsa">
          @csrf
          <div class="form-group">
            <label for="nominal">NOMINAL : </label>
            <input type="text" name="nominal" id="nominal" required autocomplete="off" class="form-control @error('nominal') is-invalid @enderror" placeholder="Nominal Pulsa.." value="{{ old('nominal') }}">
            @error('nominal')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="harga">HARGA : </label>
            <input type="text" name="harga" id="harga" required autocomplete="off" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga Pulsa.." value="{{ old('harga') }}">
            @error('harga')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="provider">PROVIDER : </label>
            <select class="form-select" name="provider_id">
              @foreach ($providers as $provider)
                @if (old('provider_id') == $provider->id)
                  <option value="{{ $provider->id }}" selected>{{ $provider->name }}</option>
                @else
                  <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                @endif
              @endforeach
            </select>
          </div>

          <hr>
          <button class="btn btn-primary" type="submit">Tambah Data!</button>
        </form>
      </div>
    </div>
  </div>
@endsection

