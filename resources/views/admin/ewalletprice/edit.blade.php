@extends('admin.layouts.main')

@section('content')
  <div class="col mb-2">
    <h1 class="text-center">Form Edit Data Harga</h1>
  </div>

  <div class="col-lg-12">
    <div class="card py-3 border-left-primary shadow">
      <div class="card-body">
        <form method="POST" action="/admin/ewalletprice/{{ $ewalletPrice->id }}">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="nominal">NOMINAL : </label>
            <input type="text" name="nominal" id="nominal" required autocomplete="off" class="form-control @error('nominal') is-invalid @enderror" placeholder="Nominal ewallet.." value="{{ $ewalletPrice->nominal }}">
            @error('nominal')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="harga">HARGA : </label>
            <input type="text" name="harga" id="harga" required autocomplete="off" class="form-control @error('harga') is-invalid @enderror" placeholder="Harga ewallet.." value="{{ $ewalletPrice->harga }}">
            @error('harga')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="ewallet">E-WALLET : </label>
            <select class="form-select" name="ewallet_id">
              @foreach ($ewallets as $ewallet)
                @if (old('ewallet_id', $ewalletPrice->ewallet_id) == $ewallet->id)
                  <option value="{{ $ewallet->id }}" selected>{{ $ewallet->name }}</option>
                @else
                  <option value="{{ $ewallet->id }}">{{ $ewallet->name }}</option>
                @endif
              @endforeach
            </select>
          </div>

          <hr>
          <button class="btn btn-primary" type="submit">Ubah Data!</button>
        </form>
      </div>
    </div>
  </div>
@endsection

