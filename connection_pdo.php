<?php
$servername = "localhost";
$database = "datasekolah";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // pgsql:host=$servername;port=5432;dbname=$database
    // sqlsrv:server=$servername;Database=$database
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
