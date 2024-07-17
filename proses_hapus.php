<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM siswa WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Data siswa berhasil dihapus.";
} else {
    echo "Ada error: " . $conn->error;
}

$conn->close();

header("Location: daftar_siswa.php");
exit();
?>
