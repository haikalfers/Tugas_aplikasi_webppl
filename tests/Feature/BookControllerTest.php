<?php

namespace Tests\Unit;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class BookControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_add_to_cart_validation()
    {
        // Membuat data dummy buku
        $book = Book::factory()->create();

        // Simulasikan pengguna menambahkan buku ke keranjang
        Session::shouldReceive('put')->once()->with('cart', [$book->id]);

        $response = $this->post(route('add-to-cart', $book));

        // Pastikan respons redirect ke halaman utama
        $response->assertRedirect(route('books.index'));

        // Pastikan pesan sukses muncul
        $response->assertSessionHas('success', 'Buku berhasil ditambahkan ke keranjang!');
    }
}