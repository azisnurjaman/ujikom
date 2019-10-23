<?php
include '../database3.php';
$ula = new Ulangan();

$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $sub_total = $jumlah * $harga;
}
if ($aksi == "tambah") {
    $ula->create($nama, $kategori, $jumlah, $harga, $deskripsi, $sub_total);
    header("location:index.php");
} elseif ($aksi == "update") {
    $ula->update($id, $nama, $kategori, $jumlah, $harga, $deskripsi, $sub_total);
    header("location:index.php");
} elseif ($aksi == "delete") {
    $ula->delete($_GET['id']);
    header("location:index.php");

}
?>