<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="fw-bold">Daftar Buku</h1>
        </div>

        <div class="table-responsive mt-5">
            <table class="table table-light table-sm text-center">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Cover Photo</th>
                        <th scope="col">Id Genre</th>
                        <th scope="col">Id Author</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book['title'] }}</td>
                            <td>{{ $book['description'] }}</td>
                            <td>{{ $book['price'] }}</td>
                            <td>{{ $book['stock'] }}</td>
                            <td>{{ $book['cover_photo'] }}</td>
                            <td>{{ $book['genre_id'] }}</td>
                            <td>{{ $book['author_id'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
