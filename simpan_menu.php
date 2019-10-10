<?php
include ("koneksi.php");
$nama_menu = $_POST['nama_menu'];
$harga_menu = $_POST['harga_menu'];
$jumlah_menu_tersedia = $_POST['jumlah_menu_tersedia']

$insertmenu = "INSERT INTO menu values ('','$nama_menu','$harga_menu','$jumlah_menu_tersedia')";
$insertmenu_query = mysqli_query($koneksi, $insertmenu);

if ($insertmenu_query) {
	header('location:menu.php');
} else {
	echo 'GAGAL MENAMBAH DATA';
}
