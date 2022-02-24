@extends('layout.main')
@section('container')

<div class="row">
    <div class="col-lg-8 mb-4">
        <div class="bg-white shadow-sm rounded p-3" style="border-radius: 10px;">
            <form action="/category/store" method="post">
                @csrf
                <table class="table table-borderless m-0">
                    <tr>
                        <td>
                            <label for="nama_kategori" class="mb-2">Nama Kategori</label>
                            <input type="text" id="nama_kategori" name="nama_kategori" id="nama_kategori" class="form-control w-100 @error('nama_kategori') is-invalid @enderror" value="{{ old("nama_kategori") }}" placeholder="Nama Kategori Buku" autofocus required>
                            @error('nama_kategori')
                                <div class="invalid-feedback">
                                {{$message}}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-right">
                            <a href="/category" class="btn btn-warning btn-lg btn-sm mi-radius">Kembali</a>
                            <button type="submit" class="btn btn-primary btn-lg btn-sm mi-radius">Tambah Data</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="alert alert-primary">
            Ingat ! <br>
            1. Semua input harus diisi
        </div>
    </div>
</div>

@endsection