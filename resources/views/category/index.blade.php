@extends('layout.main')
@section('container')
    
{{-- hamalam Admin --}}
@if (Auth()->user()->role == 1)
@if (session()->has('success'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session()->has('danger'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('danger') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="d-flexjustify-content-end mt-3 text-end me-3">
            <a href="{{ route('admin.category.create') }}" class="btn btn-info" style="width: 207px;">Tambah Data</a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="w-50">Name</th>
                        <th class="text-center" style="width: 50%" >Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th class="w-50">Name</th>
                        <th class="text-center" style="width: 50%">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($categorys as $index => $category)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td><a href="{{ route('admin.category.show', ['category' => $category->id]) }}" class="fw-bold" style="text-decoration: none">{{ $category->nama_kategori }}</a></td>
                        <td>
                            <div class="text-center">
                                <a href="{{ route('admin.category.edit', ['category' => $category->id]) }}" class="btn btn-warning btn-sm mb-1" title="Edit"><i class="fas fa-fw fa-edit"></i></a>
                                
                                <form action="{{ route('admin.category.delete', ['category' => $category->id]) }}" class="d-inline" method="post">
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

{{-- hamalan Member --}}
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
                        <td><a href="{{ route('member.category.show', ['category' => $category->id]) }}" class="fw-bold" style="text-decoration: none">{{ $category->nama_kategori }}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif
  
@endsection