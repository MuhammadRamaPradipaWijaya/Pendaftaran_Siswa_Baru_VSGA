<?php
include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$previous_school = $_POST['previous_school'];

$sql = "UPDATE siswa SET 
            nama = '$name', 
            alamat = '$address', 
            jenis_kelamin = '$gender', 
            agama = '$religion', 
            sekolah_asal = '$previous_school' 
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Data siswa berhasil diperbarui.";
} else {
    echo "Ada error: " . $conn->error;
}

$conn->close();

header("Location: daftar_siswa.php");
exit();
?>
