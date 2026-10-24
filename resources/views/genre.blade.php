<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Genre Buku</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h2>Daftar Genre Buku</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Genre</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $genre['id'] }}</td>
                    <td>{{ $genre['name'] }}</td>
                    <td>{{ $genre['description'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>