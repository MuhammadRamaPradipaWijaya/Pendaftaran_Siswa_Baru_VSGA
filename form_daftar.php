<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        form {
            max-width: 600px;
            margin: auto;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }
        button {
            margin-top: 20px;
            padding: 10px;
            width: 100%;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
    <img src="./img/school.png" width="40" height="40" class="d-inline-block align-top rounded-circle" alt="Logo Perpustakaan">Pendaftaran Siswa</img>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="form_daftar.php">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="daftar_siswa.php">Daftar Siswa</a>
                </li>
            </ul>
        </div>
    </div>
</nav><br>

<h3 align="center">Form Pendaftaran Siswa Baru</h3><br>

<form action="proses_daftar.php" method="post">
    <label for="name">Nama Lengkap:</label>
    <input type="text" id="name" name="name" required>

    <label for="address">Alamat:</label>
    <input type="text" id="address" name="address" required>

    <label for="gender">Jenis Kelamin:</label>
    <select id="gender" name="gender" required>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    <label for="religion">Agama:</label>
    <select id="religion" name="religion" required>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddha">Buddha</option>
        <option value="Konghucu">Konghucu</option>
    </select>

    <label for="previous_school">Sekolah Asal:</label>
    <input type="text" id="previous_school" name="previous_school" required>

    <button type="submit">Daftar</button>
</form>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
