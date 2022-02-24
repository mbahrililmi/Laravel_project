<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index', [
            'title' => 'Kategori Buku',
            'categorys' => Category::with(['book'])->latest()->get()
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
            return view('category');
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
            return view('category');
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
            return view('category');
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
        Category::destroy($category->id);
        return redirect('/category')->with('success', 'Hapus Data Berhasil!');
    }
}
