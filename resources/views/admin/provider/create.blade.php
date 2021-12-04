@extends('admin.layouts.main')

@section('content')
  <div class="col mb-2">
    <h1 class="text-center">Form Tambah Data Provider</h1>
  </div>

  <div class="col-lg-12">
    <div class="card py-3 border-left-primary shadow">
      <div class="card-body">
        <form method="POST" action="/admin/provider" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Name : </label>
            <input type="text" name="name" id="name" required autocomplete="off" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Provider..">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="slug">Slug : </label>
            <input type="text" name="slug" id="slug" required autocomplete="off" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug..">
            @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="icon">Icon : </label>
            <input class="form-control @error('icon') is-invalid @enderror" type="file" id="icon" name="icon" onchange="previewImage()">
            @error('icon')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <hr>
          <button class="btn btn-primary" type="submit">Tambah Data!</button>
        </form>
      </div>
    </div>
  </div>
@endsection

