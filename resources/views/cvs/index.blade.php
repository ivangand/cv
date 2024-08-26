<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar CV</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Daftar CV</h1>
        <a href="{{ route('cvs.create') }}" class="btn">Buat CV Baru</a>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cvs as $cv)
                <tr>
                    <td>{{ $cv->name }}</td>
                    <td>{{ $cv->email }}</td>
                    <td>{{ $cv->phone }}</td>
                    <td class="actions">
                        <a href="{{ route('cvs.show', $cv->id) }}">Lihat</a>
                        <a href="{{ route('cvs.edit', $cv->id) }}">Edit</a>
                        <form action="{{ route('cvs.destroy', $cv->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
