@extends('admin.layouts.main')

@section('content')
  <div class="col mb-2">
    <h1 class="text-center">Form Edit Data Pulsa</h1>
  </div>

  <div class="col-lg-12">
    <div class="card py-3 border-left-primary shadow">
      <div class="card-body">
        <form method="POST" action="/admin/provider/{{ $provider->id }}">
          @method('put')
          @csrf
          <div class="form-group">
            <label for="name">Name : </label>
            <input type="text" name="name" id="name" required autocomplete="off" class="form-control @error('name') is-invalid @enderror" placeholder="Nama provider.." value="{{ $provider->name }}">
            @error('name')
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

