<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Book;
use phpDocumentor\Reflection\Types\Boolean;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index', [
            'title' => 'Kategori Buku',
            'categorys' => Category::with(['book'])->latest()->get()
        ]);
    }

    public function show(Category $category)
    {
        return view('category.show', [
            'title' => 'Kategori Buku',
            'categorys' => Category::with(['book'])->latest()->where('id', $category->id)->first()
        ]);
    }

    public function create()
    {
        if (Auth()->user()->role == 1) {
            return view('category.create', [
                'title' => 'Tambah Kategori Buku'
            ]);
        }
        if (Auth()->user()->role == 0) {
            return view('/category');
        }
    }

    public function store(Request $request)
    {

        if (Auth()->user()->role == 1) {
            $validatedData = $request->validate([
                'nama_kategori' => 'required|unique:categories'
            ]);

            Category::create($validatedData);
            $request->session()->flash('success', 'Tambah Data Berhasil!');
            return redirect('/category');
        }
        if (Auth()->user()->role == 0) {
            return view('/category');
        }
    }

    public function edit(Category $category)
    {
        if (Auth()->user()->role == 1) {
            return view('category.edit', [
                'title' => 'Ubah Kategori Buku',
                'category' => $category
            ]);
        }
        if (Auth()->user()->role == 0) {
            return view('/category');
        }
    }

    public function update(Request $request, Category $category)
    {
        if (Auth()->user()->role == 1) {
            $validatedData = $request->validate([
                'nama_kategori' => 'required'
            ]);

            Category::where('id', $category->id)
                ->update($validatedData);

            $request->session()->flash('success', 'Ubah Data Berhasil!');
            return redirect('/category');
        }
        if (Auth()->user()->role == 0) {
            return view('category');
        }
    }

    public function delete(Category $category)
    {
        // return $category->id; // 1
        // return $book = Book::where('id', $category->id);
        // return Book::get()->where('id', $category->category_id);
        // $check = Category::with(['book'])->latest()->get()->where('id', $category->id);
        // return $category = Category::with(['book'])->latest()->get();

        $book = Book::all()->where('category_id', $category->id);

        // jika buku masih ada maka tidak boleh dihapus
        if (count($book) > 0) {
            return redirect('/category')->with('danger', 'Hapus Data Gagal Kategori masih digunakan beberapa buku!');
        };

        Category::destroy($category->id);
        return redirect('/category')->with('success', 'Hapus Data Berhasil!');
    }
}
