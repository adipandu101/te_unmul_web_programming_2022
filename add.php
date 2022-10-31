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
                <h1>Add Data</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <form action="/progweb/insert.php" method="post">
                    <label class="form-label">No Induk</label>
                    <input class="form-control" type="number" name="no_induk" placeholder="Masukkan no induk">
                    <label class="form-label">Nama Siswa</label>
                    <input class="form-control" type="text" name="nama_siswa" placeholder="Masukkan nama siswa">
                    <label class="form-label">Alamat Siswa</label>
                    <input class="form-control" type="text" name="alamat_siswa" placeholder="Masukkan alamat siswa">
                    <br>
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                    <button type="reset" class="btn btn-light">RESET</button>
                    <a href="/progweb"><button type="button" class="btn btn-danger">CANCEL</button></a>
                </form>
            </div>
        </div>
</body>