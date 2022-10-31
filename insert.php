<?php
//$_GET[]
include('connection.php');
$no_induk = $_POST['no_induk'];
$nama_siswa = $_POST['nama_siswa'];
$alamat_siswa = $_POST['alamat_siswa'];

$sql = "INSERT INTO datasiswa (no_induk, nama_siswa, alamat_siswa) VALUES ('$no_induk', '$nama_siswa', '$alamat_siswa')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo "<a href='/progweb'><button class='btn btn-primary'>HOME</button></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
