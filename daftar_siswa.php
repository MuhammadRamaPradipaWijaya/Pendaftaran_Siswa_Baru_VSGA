<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        button {
            margin-top: 5px;
            padding: 8px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 12px;
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

<div class="container">
    <h2 align="center">Daftar Siswa Pendaftar</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';

            $sql = "SELECT * FROM siswa";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $no = 1;
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>" . $row['jenis_kelamin'] . "</td>";
                    echo "<td>" . $row['agama'] . "</td>";
                    echo "<td>" . $row['sekolah_asal'] . "</td>";
                    echo '<td>
                            <a href="form_edit_daftar.php?id=' . $row['id'] . '"><button><i class="fas fa-edit"></i></button></a>
                            <a href="proses_hapus.php?id=' . $row['id'] . '"><button><i class="fas fa-trash"></i> </button></a>
                          </td>';
                    echo "</tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='7'>Tidak ada data siswa yang tersedia</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
