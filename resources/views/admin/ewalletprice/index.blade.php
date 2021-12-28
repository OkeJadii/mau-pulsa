@extends('admin.layouts.main')

@section('content')
  <div class="col-lg-12">
    <h1 class="text-center">Tabel Data Harga Top Up</h1>
  </div>
  @if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
      <i class="fas fa-check-circle"></i> {!! session('success') !!}
    </div>
  @endif

  <!-- DataTales -->
  <div class="card shadow mb-4 col-lg-12">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Harga</h6>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <div class="d-flex justify-content-between">
          <a href="/admin/ewalletprice/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Create new data</a>
          {{ $ewalletprices->links() }}
        </div>
        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th width="12%">Icon</th>
              <th>E-Wallet</th>
              <th>Nominal</th>
              <th>Harga</th>
              <th width="15%">Aksi</th>
            </tr>
          </thead>
          @foreach ($ewalletprices as $ewalletprice)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>
                @if ($ewalletprice->ewallet->icon)
                  <img src="{{ asset('storage/' . $ewalletprice->ewallet->icon) }}" alt="{{ $ewalletprice->ewallet->name }}" class="img-fluid" width="50px">
                @else
                  <i class="fas fa-wallet" style="color: #11dbcf; font-size:25px;"></i>
                @endif
              </td>
              <td>{{ $ewalletprice->ewallet->name }}</td>
              <td>{{ $ewalletprice->nominal }}</td>
              <td>{{ $ewalletprice->harga }}</td>
              <td>
                {{-- <a href="{{ route('ewalletprice.edit', ['ewalletprice' => $ewalletprice->id]) }}" class="btn-primary btn"><i class="fas fa-edit"></i></a> --}}
                <a href="/admin/ewalletprice/{{ $ewalletprice->id }}/edit" class="btn-primary btn"><i class="fas fa-edit"></i></a>
                <form action="/admin/ewalletprice/{{ $ewalletprice->id }}" method="POST" class="d-inline">
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