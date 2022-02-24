@extends('layout.main')
@section('container')
    
@if (Auth()->user()->role == 1)
@if (session()->has('success'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="d-flexjustify-content-end mt-3 text-end me-3">
            <a href="/category/create" class="btn btn-info" style="width: 207px;">Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="w-50">Name</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th class="w-50">Name</th>
                        <th class="text-center">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($categorys as $index => $category)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $category->nama_kategori }}</td>
                        <td>
                            <div class="text-center">
                                <a href="/category/edit/{{ $category->id }}" class="btn btn-warning btn-sm mb-1" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                
                                <form action="/category/delete/{{ $category->id }}" class="d-inline" method="post">
                                    @method('delete')
                                    @csrf
                                    <button onclick="return confirm('do you want to delete this data ?')" type="submit" class="btn btn-danger btn-sm mb-1" title="Hapus"><i class="fas fa-fw fa-trash"></i></button>
                                    <input type="hidden" name="id">
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif

@if (Auth()->user()->role == 0)
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
                        <th class="w-50">Name</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th class="w-50">Name</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($categorys as $index => $category)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $category->nama_kategori }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif
  
@endsection