<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        // Hapus data lama (jika ada)
        Book::truncate();

        // Menambahkan 10 buku baru
        Book::create([
            'title' => 'Buku Pemrograman Laravel',
            'description' => 'Belajar Laravel untuk pemula.',
            'price' => 150000,
            'stock' => 10,
        ]);

        Book::create([
            'title' => 'Buku Algoritma Dasar',
            'description' => 'Panduan belajar algoritma.',
            'price' => 120000,
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'Dasar-Dasar PHP',
            'description' => 'Pemrograman dasar menggunakan PHP.',
            'price' => 80000,
            'stock' => 15,
        ]);

        Book::create([
            'title' => 'JavaScript Modern',
            'description' => 'Belajar JavaScript terbaru.',
            'price' => 90000,
            'stock' => 8,
        ]);

        Book::create([
            'title' => 'Desain Web Responsif',
            'description' => 'Membuat desain web yang responsif.',
            'price' => 75000,
            'stock' => 12,
        ]);

        Book::create([
            'title' => 'Python for Beginners',
            'description' => 'Panduan belajar Python untuk pemula.',
            'price' => 60000,
            'stock' => 20,
        ]);

        Book::create([
            'title' => 'Data Structures and Algorithms',
            'description' => 'Pengenalan struktur data dan algoritma.',
            'price' => 110000,
            'stock' => 7,
        ]);

        Book::create([
            'title' => 'React.js Mastery',
            'description' => 'Belajar React.js dari awal hingga mahir.',
            'price' => 130000,
            'stock' => 9,
        ]);

        Book::create([
            'title' => 'SQL Fundamentals',
            'description' => 'Dasar-dasar SQL untuk pemula.',
            'price' => 50000,
            'stock' => 18,
        ]);

        Book::create([
            'title' => 'Full Stack Development Guide',
            'description' => 'Panduan pengembangan full stack.',
            'price' => 140000,
            'stock' => 6,
        ]);
    }
}