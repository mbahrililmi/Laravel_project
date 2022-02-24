<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth()->user()->role == 1) {
            return view('dashboard', [
                'title' => 'Dashboard',
                'countCategory' => $category = Category::all(),
                'countBook' => $book = Book::all()
            ]);
        }

        if((Auth()->user()->role==0)){
            return redirect('/book');
        }
    }
}
