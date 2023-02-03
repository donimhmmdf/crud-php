<?php
include('koneksi.php');
include('fungsi.php')
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unibook Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
<?php
include('layouts/navbar.php')
?>
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Tambah Penerbit
        </div>
        <div class="card-body">
            <?php
            if ($error) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error ?>
                </div>
            <?php
                header("refresh:1;url=admin.php");
            }
            ?>
            <?php
            if ($sukses) {
            ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $sukses ?>
                </div>
            <?php
                header("refresh:1;url=admin.php");
            }
            ?>
            <form action="" method="POST">
                <div class="mb-3 row">
                    <label for="id" class="col-sm-2 col-form-label">ID Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" name="id">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kota" name="kota">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="telepon" name="telepon">
                    </div>
                </div>
                <div class="col-12">
                    <input type="submit" name="simpanpenerbit" value="Simpan Data" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
</div>


</html>