<?php
include('koneksi.php')
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
    <?php
    include('layouts/navbar.php')
    ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <div class="input-group mb-3 d-flex justify-content-end">
                    <form action="" method="get">
                        <label for="cari" class="d-flex">
                            <input type="text" class="form-control" placeholder="Search" name="cari">
                            <input type="submit" value="Cari" class="btn btn-success">
                        </label>
                    </form>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Nama Buku</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Penerbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_GET['cari'])) {
                            $cari = $_GET['cari'];
                            $sql2   = "select * from books where nama_buku like '%" . $cari . "%'";
                        } else {
                            $sql2   = "select * from books order by created_at desc";
                        }
                        $q2     = mysqli_query($koneksi, $sql2);
                        $no   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id_buku        = $r2['id_buku'];
                            $kategori       = $r2['kategori'];
                            $nama_buku      = $r2['nama_buku'];
                            $harga          = $r2['harga'];
                            $stok           = $r2['stok'];
                            $penerbit       = $r2['penerbit'];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td scope="row"><?php echo $kategori ?></td>
                                <td scope="row"><?php echo $nama_buku ?></td>
                                <td scope="row"><?php echo $harga ?></td>
                                <td scope="row"><?php echo $stok ?></td>
                                <td scope="row"><?php echo $penerbit ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>