<!DOCTYPE html>
<html>
<head>
    <title>Hasil Formulir</title>
</head>
<body>
    <h1>Hasil Isian Formulir</h1>
    
    <!-- Tampilkan flash message sukses jika ada -->
    @if (session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Tampilkan data formulir jika ada -->
    @if ($nama)
    <p>Nama: {{ $nama }}</p>
    @endif

    @if ($email)
    <p>Email: {{ $email }}</p>
    @endif

    @if ($password)
    <p>Password: {{ $password }}</p>
    @endif

    @if ($gambarName)
    <p>Foto Diri:</p>
    <img src="{{ asset('uploads/'.$gambarName) }}" alt="Gambar">
    @endif

    @if ($nilai)
    <p>Gaji: {{ $gaji }}</p>
    @endif
</body>
</html>
