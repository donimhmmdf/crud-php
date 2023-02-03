<?php
include('koneksi.php');
include('fungsi.php');
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
            Update Buku
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
            <?php
            $id_buku = $_GET['id_buku'];
            $sql2   = "select * from books where id_buku= '$id_buku'";
            $q2     = mysqli_query($koneksi, $sql2);
            while ($r2 = mysqli_fetch_array($q2)) {
                $id_buku        = $r2['id_buku'];
                $kategori       = $r2['kategori'];
                $nama_buku      = $r2['nama_buku'];
                $harga          = $r2['harga'];
                $stok           = $r2['stok'];
                $penerbit       = $r2['penerbit'];
            ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="id" class="col-sm-2 col-form-label">ID Buku</label>
                        <div class="col-sm-10">
                            <input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $id_buku ?>">
                        </div>
                    </div>
                    <div class=" mb-3 row">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $kategori ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Buku</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama_buku ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $stok ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $penerbit ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="updatebuku" value="Update Data" class="btn btn-primary" />
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>


</html>