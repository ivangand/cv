<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat CV Baru</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional: Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Buat CV Baru</h1>

        <!-- Menampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Menampilkan pesan kesalahan validasi -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form untuk membuat CV baru -->
        <form action="{{ route('cvs.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telepon:</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required>
            </div>
            <div class="mb-3">
                <label for="summary" class="form-label">Ringkasan:</label>
                <textarea id="summary" name="summary" class="form-control">{{ old('summary') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="education" class="form-label">Pendidikan:</label>
                <textarea id="education" name="education" class="form-control">{{ old('education') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="experience" class="form-label">Pengalaman:</label>
                <textarea id="experience" name="experience" class="form-control">{{ old('experience') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="skills" class="form-label">Keterampilan:</label>
                <textarea id="skills" name="skills" class="form-control">{{ old('skills') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan CV</button>
        </form>
    </div>

    <!-- Link Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
