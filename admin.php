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
    <?php
    include('layouts/navbar.php')
    ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Buku
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Nama Buku</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from books order by created_at desc";
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
                                <td scope="row">
                                    <a href="editbuku.php?id_buku=<?php echo $id_buku ?>"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                                    <a href="admin.php?op=deletebuku&id_buku=<?php echo $id_buku ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <a href="tambahbuku.php" class="btn btn-primary btn-sm">Tambah data</a>
                </div>
            </div>
        </div>


    </div>

    <div class="container mt-4">
        <!-- untuk memasukkan data -->


        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Penerbit
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from publishers order by created_at desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $no   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id_penerbit        = $r2['id_penerbit'];
                            $nama               = $r2['nama'];
                            $alamat             = $r2['alamat'];
                            $kota               = $r2['kota'];
                            $telepon            = $r2['telepon'];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td scope="row"><?php echo $nama ?></td>
                                <td scope="row"><?php echo $alamat ?></td>
                                <td scope="row"><?php echo $kota ?></td>
                                <td scope="row"><?php echo $telepon ?></td>
                                <td scope="row">
                                    <a href="editpenerbit.php?id_penerbit=<?php echo $id_penerbit ?>"><button type="button" class="btn btn-warning btn-sm">Edit</button></a>
                                    <a href="admin.php?op=deletepenerbit&id_penerbit=<?php echo $id_penerbit ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>
                <div class="d-flex justify-content-end">
                    <a href="tambahpenerbit.php" class="btn btn-primary btn-sm">Tambah data</a>
                </div>
            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>