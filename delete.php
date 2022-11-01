<?php
include('connection.php');
$id = $_GET['id'];

$sql = "DELETE FROM datasiswa WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo "<a href='/progweb'><button class='btn btn-primary'>HOME</button></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
