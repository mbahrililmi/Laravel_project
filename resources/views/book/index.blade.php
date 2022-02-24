@extends('layout.main')
@section('container')

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori Buku</th>
                    <th>Nama Buku</th>
                    <th>Stok Buku</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kategori Buku</th>
                    <th>Nama Buku</th>
                    <th>Stok Buku</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($books as $index => $book)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $book->category->nama_kategori }}</td>
                    <td>{{ $book->nama_buku }}</td>
                    <td>{{ $book->stok_buku }}</td>
                    <td>
                        <a href="/book/edit/{{ $book->id }}" class="btn btn-warning w-100 btn-sm mb-1" title="Edit"><i class="fas fa-fw fa-edit"></i></a>

                        <form action="/book/delete" class="d-inline" method="post">
                            <button onclick="return confirm('do you want to delete this data ?')" type="submit" class="btn w-100 btn-danger btn-sm mb-1" title="Hapus"><i class="fas fa-fw fa-trash"></i></button>
                            <input type="hidden" name="id" value="{{ $book->id }}">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection