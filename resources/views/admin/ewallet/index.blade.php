@extends('admin.layouts.main')

@section('content')
  <div class="col-lg-12">
    <h1 class="text-center">Tabel Data E-Wallet</h1>
  </div>
  @if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
      <i class="fas fa-check-circle"></i> {!! session('success') !!}
    </div>
  @endif

  <!-- DataTales -->
  <div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel E-Wallet</h6>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <a href="/admin/ewallet/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Create new data</a>
        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th width="15%">Icon</th>
              <th>Nama E-Wallet</th>
              <th width="15%">Aksi</th>
            </tr>
          </thead>
          @foreach ($ewallets as $ewallet)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>
                @if ($ewallet->icon)
                  <img src="{{ asset('storage/' . $ewallet->icon) }}" alt="{{ $ewallet->name }}" class="img-fluid" width="50px">
                @else
                 <i class="fas fa-wallet" style="color: #11dbcf; font-size:25px;"></i>
                @endif
              </td>
              <td>{{ $ewallet->name }}</td>
              <td>
                <a href="/admin/ewallet/{{ $ewallet->id }}/edit" class="btn-primary btn"><i class="fas fa-edit"></i></a>
                <form action="/admin/ewallet/{{ $ewallet->id }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn-danger btn border-0" onclick="return confirm('ANDA YAKIN MENGHAPUS DATA INI?')"><i class="fas fa-trash-alt"></i></button>
                </form>
            </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection