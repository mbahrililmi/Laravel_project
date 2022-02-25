@extends('layout.main')
@section('container')

<h2 style="text-align: end">Kategori Buku : {{ $categorys->nama_kategori }}</h2>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="d-flexjustify-content-end mt-3 text-end me-3">
        <a href="/category" class="btn btn-info" style="width: 207px;">Kembali Data</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th class="w-50">Nama Buku</th>
                    <th class="text-center">Stok Buku</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th class="w-50">Nama Buku</th>
                    <th class="text-center">Stok Buku</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ( $categorys->book  as $index => $category)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $category->nama_buku }}</td>
                    <td style="text-align: center">{{ $category->stok_buku }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection