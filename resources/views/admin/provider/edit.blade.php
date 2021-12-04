@extends('admin.layouts.main')

@section('content')
  <div class="col mb-2">
    <h1 class="text-center">Form Edit Data Pulsa</h1>
  </div>

  <div class="col-lg-12">
    <div class="card py-3 border-left-primary shadow">
      <div class="card-body">
        <form method="POST" action="/admin/provider/{{ $provider->id }}" enctype="multipart/form-data">
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

          <div class="form-group">
            <label for="slug">Slug : </label>
            <input type="text" name="slug" id="slug" required autocomplete="off" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug.." value="{{ $provider->slug }}">
            @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="icon">Icon : </label>
            <input type="hidden" name="oldImage" value="{{ $provider->icon }}">
            @if ($provider->icon)
              <img src="{{ asset('storage/' . $provider->icon) }}" class="img-preview img-fluid d-block" width="100px">
            @else
              <img class="img-preview img-fluid" width="100px">
            @endif
            <img class="img-preview img-fluid mb-3 col-sm-5" width="100px">
            <input class="form-control @error('icon') is-invalid @enderror" type="file" id="icon" name="icon" onchange="previewImage()">
            @error('icon')
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

  <script>
    function previewImage() {
      const image = document.querySelector('#icon');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(OFREvent) {
        imgPreview.src = OFREvent.target.result;
      }
    }
  </script>
@endsection

