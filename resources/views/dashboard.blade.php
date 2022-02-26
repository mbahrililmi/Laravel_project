@extends('layout.main')
@section('container')

<div class="row mb-5">
  <div class="col-lg-12">
    <div class="card border shadow bg-info">
      <div class="card-body text-center text-white">
        Tentang Pengguna
      </div>
    </div>
  </div>
</div>

<div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center mb-5">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                  Kategori Buku
                </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($countCategory) }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-fw fa-bookmark fa-3x text-gray-300"></i>
              </div>
            </div>
            <a href="{{ route('admin.category') }}" class="btn btn-secondary btn-sm mi-radius">Buka Halaman</a>
          </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center mb-5">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                  Buku
                </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($countBook) }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-fw fa-book fa-3x text-gray-300"></i>
              </div>
            </div>
            <a href="{{ route('admin.book') }}" class="btn btn-secondary btn-sm mi-radius">Buka Halaman</a>
          </div>
        </div>
    </div>

</div>

@endsection