<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Genre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="fw-bold">Daftar Genre</h1>
            </div>

        <div class="table-responsive mt-5">
            <table class="table table-light table-sm">
                <thead class="table-light text-center">
                    <tr>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskripsi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($genres as $genre)
                        <tr>
                            <td>{{ $genre['title'] }}</td>
                            <td>{{ $genre['description'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
