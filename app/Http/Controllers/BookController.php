<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('book.index', [
            'title' => 'Buku',
            'books' => Book::with(['category'])->latest()->get()
        ]);
    }
}
