<?php

include('connection.php');
$id = $_POST['id'];
$no_induk = $_POST['no_induk'];
$nama_siswa = $_POST['nama_siswa'];
$alamat_siswa = $_POST['alamat_siswa'];

$sql = "UPDATE datasiswa SET no_induk='$no_induk', nama_siswa='$nama_siswa', alamat_siswa='$alamat_siswa' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo "<a href='/progweb'><button class='btn btn-primary'>HOME</button></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
