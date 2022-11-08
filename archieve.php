<?php
foreach ($data as $row) {
?>

    <tr class="<?php echo $row['alamat_siswa'] == 'Samarinda' ? 'table-danger' : 'table-primary' ?>">
        <td><?php echo $row['no_induk']; ?></td>
        <td><?php echo $row['nama_siswa']; ?></td>
        <td><?php echo $row['alamat_siswa']; ?></td>
    </tr>

<?php
}
?>

<?php
//PDO---------------------------------------------------------------------------------------

$servername = "localhost";
$database = "datasekolah";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // pgsql:host=$servername;port=5432;dbname=$database
    // sqlsrv:server=$servername;Database=$database
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

//Mysqli prochedural---------------------------------------------------------------------------------------

$servername = "localhost";
$database = "datasekolah";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<!--------------------- Add Page ------------------------------------------>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Add Data</h1>
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-4">
                <form action="/progweb/update.php" method="post">
                    <label for="no_induk" class="form-label">No Induk</label>
                    <input type="text" class="form-control" id="no_induk" name="no_induk" placeholder="Masukkan nomor induk siswa">
                    <label for="no_induk" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Masukkan nama siswa">
                    <label for="no_induk" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat_siswa" name="alamat_siswa" placeholder="Masukkan alamat siswa">
                    <hr>
                    <button type="submit" class="btn btn-primary">SAVE</button>
                    <button type="reset" class="btn btn-secondary">RESET</button>
                    <a href="/progweb/index.php"><button type="button" class="btn btn-danger">CANCEL</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>


<?php

// update -----------------------------------------------------------------

include('connection.php');

$no_induk = $_POST['no_induk'];
$nama_siswa = $_POST['nama_siswa'];
$alamat_siswa = $_POST['alamat_siswa'];

$sql = "INSERT INTO datasiswa (no_induk, nama_siswa, alamat_siswa)
VALUES ('$no_induk', '$nama_siswa', '$alamat_siswa')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>


<!-- API ---------------------------------------------------------------------->
<?php
include('../connection.php');
$sql = "SELECT * FROM datasiswa";

$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $myArray[] = $row;
}

header('Content-type: application/json');
echo json_encode($myArray);






include('../connection.php');

$no_induk = $_POST['no_induk'];
$nama_siswa = $_POST['nama_siswa'];
$alamat_siswa = $_POST['alamat_siswa'];

$sql = "INSERT INTO datasiswa (no_induk, nama_siswa, alamat_siswa) VALUES ('$no_induk', '$nama_siswa', '$alamat_siswa')";


if (mysqli_query($conn, $sql)) {
    echo json_encode('success');
} else {
    echo json_encode('error');
}
?>


<!-- JS AJAX-------------------------------------------------------------->

<script>
    $.get("/progweb/api/getdata.php", function(data, status) {
        let html = data.map(d => {
            return '<div>' + d.no_induk + '</div>';
        })
        console.log(data, status)
        $('#data').html(html)
    });




    function refreshData() {
        $.get("/progweb/api/getdata.php", function(data, status) {
            let html = data.map(d => {

                let row = "<tr><td>" + d.no_induk + "</td><td>" + d.nama_siswa + "</td><td>" + d.alamat_siswa + "</td>";
                row += "<td>";
                row += "<button onclick='openModalConfirmation(" + d.id + ")' class='btn btn-danger'><i class='bi bi-trash'></i></button>";
                row += "</td>";
                row += "</tr>";

                return row;
            })
            console.log(data, status)
            $('#data').html(html)
        });
    }

    function openModalConfirmation(id) {
        console.log(id)
        $('#exampleModal').modal('show');
    }
</script>