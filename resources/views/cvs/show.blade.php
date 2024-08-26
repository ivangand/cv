<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail CV</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Detail CV</h1>
        <div class="cv-card">
            <div class="cv-header">
                <h2>{{ $cv->name }}</h2>
                <p class="text-muted">{{ $cv->email }} | {{ $cv->phone }}</p>
            </div>
            <div class="cv-body">
                <h3>Ringkasan</h3>
                <p>{{ $cv->summary }}</p>
                
                <h3>Pendidikan</h3>
                <p>{{ $cv->education }}</p>
                
                <h3>Pengalaman</h3>
                <p>{{ $cv->experience }}</p>
                
                <h3>Keterampilan</h3>
                <p>{{ $cv->skills }}</p>
            </div>
            <div class="cv-footer">
                <a href="{{ route('cvs.index') }}" class="btn-back">Kembali ke Daftar CV</a>
            </div>
        </div>
    </div>
</body>
</html>
