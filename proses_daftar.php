<?php
include 'config.php';

$name = $_POST['name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$previous_school = $_POST['previous_school'];

$sql = "INSERT INTO siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal)
        VALUES ('$name', '$address', '$gender', '$religion', '$previous_school')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Ada error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
