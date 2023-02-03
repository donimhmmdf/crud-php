<?php
include('koneksi.php');
// Deklarasi
$id_buku        = "";
$id_penerbit    = "";
$kategori       = "";
$nama_buku      = "";
$harga          = "";
$stok           = "";
$penerbit       = "";
$sukses         = "";
$error          = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
// Cari Buku
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : " . $cari . "</b>";
}
// Delete Buku
if ($op == 'deletebuku') {
    $id_buku         = $_GET['id_buku'];
    $sql1            = "delete from books where id_buku = '$id_buku'";
    $q1              = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses      = "Berhasil hapus data";
    } else {
        $error       = "Gagal melakukan delete data";
    }
}
// Delete Penerbit
if ($op == 'deletepenerbit') {
    $id_penerbit     = $_GET['id_penerbit'];
    $sql1            = "delete from publishers where id_penerbit = '$id_penerbit'";
    $q1              = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses      = "Berhasil hapus data";
    } else {
        $error       = "Gagal melakukan delete data";
    }
}
// Simpan Buku
if (isset($_POST['simpanbuku'])) {
    $id         = $_POST['id'];
    $kategori   = $_POST['kategori'];
    $nama       = $_POST['nama'];
    $harga      = $_POST['harga'];
    $stok       = $_POST['stok'];
    $penerbit   = $_POST['penerbit'];
    $sql1       = "insert into books (id_buku,kategori,nama_buku,harga,stok,penerbit) values ('$id','$kategori','$nama','$harga','$stok','$penerbit')";
    $q1             = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses     = "Berhasil memasukkan data baru";
    } else {
        $error      = "Gagal memasukkan data";
    }
}
// Update Buku
if (isset($_POST['updatebuku'])) {
    $id         = $_POST['id'];
    $kategori   = $_POST['kategori'];
    $nama       = $_POST['nama'];
    $harga      = $_POST['harga'];
    $stok       = $_POST['stok'];
    $penerbit   = $_POST['penerbit'];
    $sql1       = "update books set kategori='$kategori', nama_buku='$nama', harga='$harga', stok='$stok', penerbit='$penerbit'  WHERE id_buku='$id'";
    $q1             = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses     = "Berhasil update data ";
    } else {
        $error      = "Gagal update data";
    }
}
// Update Penerbit
if (isset($_POST['updatepenerbit'])) {
    $id             = $_POST['id'];
    $nama           = $_POST['nama'];
    $alamat         = $_POST['alamat'];
    $kota           = $_POST['kota'];
    $telepon        = $_POST['telepon'];
    $sql1           = "update publishers set nama='$nama', alamat='$alamat', kota='$kota', telepon='$telepon' WHERE id_penerbit='$id'";
    $q1             = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses     = "Berhasil update data ";
    } else {
        $error      = "Gagal update data";
    }
}
// Tambah Penerbit
if (isset($_POST['simpanpenerbit'])) {
    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $kota       = $_POST['kota'];
    $telepon    = $_POST['telepon'];
    $sql1       = "insert into publishers (id_penerbit,nama,alamat,kota,telepon) values ('$id','$nama','$alamat','$kota','$telepon')";
    $q1             = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses     = "Berhasil memasukkan data baru";
    } else {
        $error      = "Gagal memasukkan data";
    }
}
