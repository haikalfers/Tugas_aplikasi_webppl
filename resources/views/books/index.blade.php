<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buku Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Daftar Buku</h1>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->description }}</td>
                        <td>Rp {{ number_format($book->price, 0, ',', '.') }}</td>
                        <td>{{ $book->stock }}</td>
                        <td>
                            <form action="{{ route('add-to-cart', $book->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Masukkan ke Keranjang</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Bagian Bawah Halaman -->
<div class="container mt-5">
    <h2>Keranjang Anda</h2>
    @if (Session::has('cart'))
        <p>Jumlah buku dalam keranjang: {{ count(Session::get('cart')) }}</p>
        <a href="{{ route('checkout') }}" class="btn btn-success">Lanjut ke Checkout</a>
    @else
        <p>Keranjang kosong.</p>
    @endif
</div>
</body>
</html>