<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('book.index', [
            'title' => 'Buku',
            'books' => Book::with(['category'])->latest()->get()
        ]);
    }

    public function create()
    {
        if (Auth()->user()->role == 1) {
            return view('book.create', [
                'title' => 'Tambah Buku',
                'categorys' => Category::all()
            ]);
        }
        if (Auth()->user()->role == 0) {
            return view('book');
        }
    }

    public function store(Request $request)
    {

        if (Auth()->user()->role == 1) {
            $validatedData = $request->validate([
                'category_id' => 'required',
                'nama_buku' => 'required|unique:books',
                'stok_buku' => 'required|numeric'
            ]);

            Book::create($validatedData);
            // $request->session()->flash('success', 'Tambah Data Berhasil!');
            return redirect()->route('admin.book')->with('success', 'Tambah Data Berhasil!');
        }
        if (Auth()->user()->role == 0) {
            return view('book');
        }
    }

    public function edit(Book $book)
    {
        if (Auth()->user()->role == 1) {
            return view('book.edit', [
                'title' => 'Ubah Kategori Buku',
                'book' => $book,
                'categorys' => Category::all()
            ]);
        }
        if (Auth()->user()->role == 0) {
            return view('book');
        }
    }

    public function update(Request $request, Book $book)
    {
        if (Auth()->user()->role == 1) {
            $validatedData = $request->validate([
                'category_id' => 'required',
                'nama_buku' => 'required',
                'stok_buku' => 'required|numeric'
            ]);

            Book::where('id', $book->id)
                ->update($validatedData);

            // $request->session()->flash('success', 'Ubah Data Berhasil!');
            return redirect()->route('admin.book')->with('success', 'Ubah Data Berhasil!');
        }
        if (Auth()->user()->role == 0) {
            return view('book');
        }
    }

    public function delete(Book $book)
    {
        Book::destroy($book->id);
        return redirect()->route('admin.book')->with('success', 'Hapus Data Berhasil!');
    }
}
