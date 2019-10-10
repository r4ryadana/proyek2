<?php
include ("koneksi.php");
$id_menu = $_GET['id_menu'];
$nama_menu = $_POST['nama_menu'];
$harga_menu = $_POST['harga_menu'];
$jumlah_menu_tersedia = $_POST['jumlah_menu_tersedia'];
$query = mysqli_query($koneksi, "UPDATE menu set nama_menu='$nama_menu',harga_menu='$harga_menu',jumlah_menu_tersedia='$jumlah_menu_tersedia' where id_menu = '$id_menu'");

if($query){
 header('location:menu.php');
}
else{
 echo "Maaf gagal meng-update";
}
?>