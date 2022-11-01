<?php
include('connection.php');
$sql = "SELECT * FROM datasiswa";

$result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Hello, world!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/progweb/add.php">
                    <button id="button-add" class="btn btn-primary"> <i class="bi bi-plus-circle"></i> </button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <th>No Induk</th>
                        <th>Nama Siswa</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        /*while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row["no_induk"] . "</td>";
                            echo "<td>" . $row["nama_siswa"] . "</td>";
                            echo "<td>" . $row["alamat_siswa"] . "</td>";
                            echo "</tr>";
                        }*/
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr class="
                            <?php
                            echo ($row["alamat_siswa"] == 'Samarinda') ? 'table-danger' : 'table-primary';
                            /*if ($row["alamat_siswa"] == 'Samarinda') {
                                echo 'table-danger';
                            } else {
                                echo 'table-primary';
                            }*/
                            ?>">
                                <td><?php echo $row["no_induk"]; ?></td>
                                <td><?php echo $row["nama_siswa"]; ?></td>
                                <td><?php echo $row["alamat_siswa"]; ?></td>
                                <td>
                                    <a href="/progweb/edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <a href="/progweb/delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">
                                        <i class="bi bi-trash"></i>
                                    </a>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>