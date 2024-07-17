<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pendaftaran Siswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        button {
            margin-top: 20px;
            padding: 10px;
            width: 180px;
            height: 100px;
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
</nav>

<div style="text-align: center; margin-top: 100px;">
    <h2>Pendaftaran Siswa Baru</h2><br>
    <button onclick="location.href='form_daftar.php'"><i class="fas fa-user-plus"></i> Pendaftaran</button>
    <button onclick="location.href='daftar_siswa.php'"><i class="fas fa-users"></i> Daftar Siswa</button>
</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
