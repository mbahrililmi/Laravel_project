<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'title' => 'Dashboard',
            'countCategory' => $category = Category::all(),
            'countBook' => $book = Book::all()
        ]);
    }
}
