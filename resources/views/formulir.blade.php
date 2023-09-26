<!DOCTYPE html>
<html>
<head>
    <title>Halaman Formulir</title>
    <style>

        body {
            background-color: black; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            margin: 0; 
        }

        .container {
            background-color: khaki; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
        }

        h1 {
            text-align: center;
        }

        .alert-success {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulir Data Karyawan</h1>

        <!-- Menampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('submit-form') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br><br>
            
            <label for="gambar">Foto Diri:</label>
            <input type="file" id="gambar" name="gambar" accept=".jpg, .jpeg, .png" required>
            <br><br>
            
            <label for="gaji">Gaji:</label>
            <input type="number" id="gaji" name="gaji" step="0.01" min="2.50" max="99.99" required>
            <br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
