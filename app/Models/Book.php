<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // memberikan akses ke fild yang disebutkan
    // protected $fillable = ['nama_buku, jumlah_buku'];

    // tidak memberikan akses inputan ke fild yang disebutkan
    protected $guarded = ['id'];

    public function category()
    {
        // relasi antar 1 buku ke 1 kategori
        return $this->belongsTo(Category::class);
    }
}
