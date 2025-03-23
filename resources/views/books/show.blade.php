<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Detail Buku</h1>
        <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" style="max-width: 200px;" class="mb-3">
        <p><strong>Judul:</strong> {{ $book->title }}</p>
        <p><strong>Deskripsi:</strong> {{ $book->description }}</p>
        <p><strong>Harga:</strong> Rp {{ number_format($book->price, 0, ',', '.') }}</p>
        <p><strong>Stok:</strong> {{ $book->stock }}</p>
        <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>