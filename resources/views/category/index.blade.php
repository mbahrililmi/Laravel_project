@extends('layout.main')
@section('container')
    
@if (Auth()->user()->role == 1)
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
                                
                                <form action="/category/delete" class="d-inline" method="post">
                                    <button onclick="return confirm('do you want to delete this data ?')" type="submit" class="btn btn-danger btn-sm mb-1" title="Hapus"><i class="fas fa-fw fa-trash"></i></button>
                                    <input type="hidden" name="id" value="{{ $category->id }}">
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