<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
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

<h3 align="center">Edit Data Siswa</h3><br>

<?php
include 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM siswa WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>

<form action="proses_edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    
    <label for="name">Nama Lengkap:</label>
    <input type="text" id="name" name="name" value="<?php echo $row['nama']; ?>" required>

    <label for="address">Alamat:</label>
    <input type="text" id="address" name="address" value="<?php echo $row['alamat']; ?>" required>

    <label for="gender">Jenis Kelamin:</label>
    <select id="gender" name="gender" required>
        <option value="Laki-laki" <?php if ($row['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
        <option value="Perempuan" <?php if ($row['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
    </select>

    <label for="religion">Agama:</label>
    <select id="religion" name="religion" required>
        <option value="Islam" <?php if ($row['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
        <option value="Kristen" <?php if ($row['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
        <option value="Katolik" <?php if ($row['agama'] == 'Katolik') echo 'selected'; ?>>Katolik</option>
        <option value="Hindu" <?php if ($row['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
        <option value="Buddha" <?php if ($row['agama'] == 'Buddha') echo 'selected'; ?>>Buddha</option>
        <option value="Konghucu" <?php if ($row['agama'] == 'Konghucu') echo 'selected'; ?>>Konghucu</option>
    </select>

    <label for="previous_school">Sekolah Asal:</label>
    <input type="text" id="previous_school" name="previous_school" value="<?php echo $row['sekolah_asal']; ?>" required>

    <button type="submit">Simpan Perubahan</button>
</form>

<?php
} else {
    echo "Data siswa tidak ditemukan.";
}
$conn->close();
?>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
