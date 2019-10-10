<?php
// memanggil file connection.php umtuk menghubungkan ke database

 // perintah untuk menghapus data sesuai id yang dipilih

        include ("koneksi.php");
        $id_menu = $_GET['id_menu'];
		$delete = "DELETE FROM menu WHERE id_menu= '$id_menu'";
        $delete_query = mysqli_query($koneksi, $delete);// query sql hapus data
		header('location:menu.php');
 ?>
