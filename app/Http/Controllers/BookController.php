<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    // Menampilkan daftar buku
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Menambahkan buku ke keranjang
    public function addToCart(Book $book)
    {
        // Simpan ID buku ke session sebagai contoh keranjang sederhana
        $cart = Session::get('cart', []);
        $cart[] = $book->id;
        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Buku berhasil ditambahkan ke keranjang!');
    }
    
    // Halaman checkout
    public function checkout()
    {
        $cart = Session::get('cart', []);
        $booksInCart = Book::whereIn('id', $cart)->get();

        return view('books.checkout', compact('booksInCart'));
    }

    public function removeFromCart(Book $book)
{
    $cart = Session::get('cart', []);

    // Cari indeks buku dalam keranjang
    $key = array_search($book->id, $cart);
    if ($key !== false) {
        unset($cart[$key]);
        $cart = array_values($cart); // Reset indeks array
        Session::put('cart', $cart);
    }

    return redirect()->back()->with('success', 'Buku berhasil dihapus dari keranjang!');
}
}