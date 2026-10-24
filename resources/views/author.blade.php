<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Penulis (Author)</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h2>Daftar Penulis (Author)</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Penulis</th>
                <th>Negara Asal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author['id'] }}</td>
                    <td>{{ $author['name'] }}</td>
                    <td>{{ $author['country'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>