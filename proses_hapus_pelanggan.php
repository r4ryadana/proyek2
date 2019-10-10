<?php
// memanggil file connection.php umtuk menghubungkan ke database

 // perintah untuk menghapus data sesuai id yang dipilih

        include ("koneksi.php");
        $id_pelanggan = $_GET['id_pelanggan'];
		$delete = "DELETE FROM pelanggan WHERE id_pelanggan= '$id_pelanggan'";
        $delete_query = mysqli_query($koneksi, $delete);// query sql hapus data
		header('location:pelanggan.php');
 ?>
