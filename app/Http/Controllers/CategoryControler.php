<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryControler extends Controller
{
    public function index()
    {
        return view('category.index', [
        'title' => 'Kategori Buku',
        'categorys' => $category = Category::all()
        ]);
    }
}
