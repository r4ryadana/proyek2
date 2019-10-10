<?php
include ("koneksi.php");
$nama_pelanggan = $_POST['nama_pelanggan'];
$nomor_telepon = $_POST['nomor_telepon'];

$insertpelanggan = "INSERT INTO pelanggan values ('','$nama_pelanggan','$nomor_telepon')";
$insertpelanggan_query = mysqli_query($koneksi, $insertpelanggan);

if ($insertpelanggan_query) {
	header('location:pelanggan.php');
} else {
	echo 'GAGAL MENAMBAH DATA';
}
