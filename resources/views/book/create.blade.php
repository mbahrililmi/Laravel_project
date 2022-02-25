@extends('layout.main')
@section('container')

<div class="row">
    <div class="col-lg-8 mb-4">
        <div class="bg-white shadow-sm rounded p-3" style="border-radius: 10px;">
            <form action="/book/store" method="post">
                @csrf
                <table class="table table-borderless m-0">
                    <tr>
                        <td>
                            <label for="category_id" class="mb-2">Kategori Buku</label>
                            <select name="category_id" id="category_id" class="form-select form-control" aria-label="Default select example" autofocus>
                                @foreach ($categorys as $category)
                                @if (old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->nama_kategori }}</option>
                                @else
                                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">
                                {{$message}}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nama_buku" class="mb-2">Nama Buku</label>
                            <input type="text" id="nama_buku" name="nama_buku" id="nama_buku" class="form-control w-100 @error('nama_buku') is-invalid @enderror" value="{{ old("nama_buku") }}" placeholder="Nama Kategori Buku" required>
                            @error('nama_buku')
                                <div class="invalid-feedback">
                                {{$message}}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="stok_buku" class="mb-2">Stok Buku</label>
                            <input type="text" id="stok_buku" name="stok_buku" id="stok_buku" class="form-control w-100 @error('stok_buku') is-invalid @enderror" value="{{ old("stok_buku") }}" placeholder="Jumlah Buku" autofocus required>
                            @error('stok_buku')
                                <div class="invalid-feedback">
                                {{$message}}
                                </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-right">
                            <a href="/book" class="btn btn-warning btn-lg btn-sm mi-radius">Kembali</a>
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