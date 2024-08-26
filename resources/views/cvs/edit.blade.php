<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit CV</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Edit CV</h1>

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

        <!-- Formulir untuk mengedit CV -->
        <form action="{{ route('cvs.update', $cv->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Menggunakan metode PUT untuk pembaruan -->
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $cv->name) }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $cv->email) }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Telepon:</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', $cv->phone) }}" required>
            </div>
            <div class="form-group">
                <label for="summary">Ringkasan:</label>
                <textarea id="summary" name="summary" class="form-control">{{ old('summary', $cv->summary) }}</textarea>
            </div>
            <div class="form-group">
                <label for="education">Pendidikan:</label>
                <textarea id="education" name="education" class="form-control">{{ old('education', $cv->education) }}</textarea>
            </div>
            <div class="form-group">
                <label for="experience">Pengalaman:</label>
                <textarea id="experience" name="experience" class="form-control">{{ old('experience', $cv->experience) }}</textarea>
            </div>
            <div class="form-group">
                <label for="skills">Keterampilan:</label>
                <textarea id="skills" name="skills" class="form-control">{{ old('skills', $cv->skills) }}</textarea>
            </div>
            <button type="submit" class="btn-submit">Perbarui CV</button>
        </form>
    </div>
</body>
</html>
