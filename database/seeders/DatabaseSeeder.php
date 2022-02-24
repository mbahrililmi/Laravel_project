<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'username' => 'mbahrililmi',
            'email' => 'mbahrililmi2@gmail.com',
            'role' => 1,
            'password' => Hash::make('12345')
        ]);
        User::create([
            'username' => 'rizkykurnawan',
            'email' => 'rizkykurniawan@gmail.com',
            'role' => 0,
            'password' => Hash::make('12345')
        ]);
        User::create([
            'username' => 'andraaufardiansabiq',
            'email' => 'andraaufardiansabiq@gmail.com',
            'role' => 0,
            'password' => Hash::make('12345')
        ]);

        Category::create([
            'nama_kategori' => 'Komik'
        ]);
        Category::create([
            'nama_kategori' => 'Cerpen'
        ]);
        Category::create([
            'nama_kategori' => 'Ensikopedia'
        ]);
        Category::create([
            'nama_kategori' => 'Novel Komik'
        ]);
        Category::create([
            'nama_kategori' => 'Antologi'
        ]);
        Category::create([
            'nama_kategori' => 'Dongeng'
        ]);
        Category::create([
            'nama_kategori' => 'Biografi'
        ]);
        Category::create([
            'nama_kategori' => 'Karya Ilmiah'
        ]);
        Category::create([
            'nama_kategori' => 'Kamus'
        ]);

        Book::create([
            'category_id' => '1',
            'nama_buku' => 'Naruto',
            'stok_buku' => '10'
        ]);
        Book::create([
            'category_id' => '1',
            'nama_buku' => 'One Piece',
            'stok_buku' => '8'
        ]);
        Book::create([
            'category_id' => '2',
            'nama_buku' => 'Malin Kundang',
            'stok_buku' => '5'
        ]);
        Book::create([
            'category_id' => '2',
            'nama_buku' => 'Kutukan',
            'stok_buku' => '3'
        ]);
        Book::create([
            'category_id' => '3',
            'nama_buku' => 'Hewan',
            'stok_buku' => '5'
        ]);
        Book::create([
            'category_id' => '3',
            'nama_buku' => 'Tumbuh tumbuhan',
            'stok_buku' => '8'
        ]);
        Book::create([
            'category_id' => '4',
            'nama_buku' => 'Elecced',
            'stok_buku' => '5'
        ]);
        Book::create([
            'category_id' => '4',
            'nama_buku' => 'Nano Machin',
            'stok_buku' => '8'
        ]);
        Book::create([
            'category_id' => '5',
            'nama_buku' => 'Langit, Angin Dan Bintang',
            'stok_buku' => '5'
        ]);
        Book::create([
            'category_id' => '5',
            'nama_buku' => 'Antologi Cerpen',
            'stok_buku' => '8'
        ]);
        Book::create([
            'category_id' => '6',
            'nama_buku' => 'Kumpulan Dongeng',
            'stok_buku' => '10'
        ]);
        Book::create([
            'category_id' => '6',
            'nama_buku' => 'Pangeran Kecil',
            'stok_buku' => '8'
        ]);
        Book::create([
            'category_id' => '7',
            'nama_buku' => 'Biografi Gusdur',
            'stok_buku' => '10'
        ]);
        Book::create([
            'category_id' => '7',
            'nama_buku' => 'Untuk Negriku',
            'stok_buku' => '8'
        ]);
        Book::create([
            'category_id' => '8',
            'nama_buku' => 'Karya Ilmiah 1',
            'stok_buku' => '10'
        ]);
        Book::create([
            'category_id' => '8',
            'nama_buku' => 'Karya Ilmiah 2',
            'stok_buku' => '8'
        ]);
        Book::create([
            'category_id' => '9',
            'nama_buku' => 'Kamus Bahasa Inggris',
            'stok_buku' => '10'
        ]);
        Book::create([
            'category_id' => '9',
            'nama_buku' => 'Kamus bahasa Indonesia',
            'stok_buku' => '8'
        ]);
        Book::create([
            'category_id' => '9',
            'nama_buku' => 'Kamus bahasa Banjar',
            'stok_buku' => '10'
        ]);
    }
}
