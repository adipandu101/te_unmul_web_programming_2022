<?php
include('../connection.php');
$sql = "SELECT * FROM datasiswa";

$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $myArray[] = $row;
}
header('Content-type: application/json');
echo json_encode($myArray);
