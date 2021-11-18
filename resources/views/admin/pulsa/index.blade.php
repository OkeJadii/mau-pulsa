@extends('admin.layouts.main')

@section('content')
  <div class="col-lg-12">
    <h1 class="text-center">Tabel Data Pulsa</h1>
  </div>
  @if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
      <i class="fas fa-check-circle"></i> {!! session('success') !!}
    </div>
  @endif

  <!-- DataTales -->
  <div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Pulsa</h6>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <a href="/admin/pulsa/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Create new data</a>
        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nominal</th>
              <th>Harga</th>
              <th width="15%">Aksi</th>
            </tr>
          </thead>
          @foreach ($pulsa as $p)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $p->nominal }}</td>
              <td>{{ $p->harga }}</td>
              <td>
                <a href="/admin/pulsa/{{ $p->id }}/edit" class="btn-primary btn"><i class="fas fa-edit"></i></a>
                <form action="/admin/pulsa/{{ $p->id }}" method="POST" class="d-inline">
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