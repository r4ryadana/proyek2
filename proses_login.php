<?php
session_start();

require_once('koneksi.php');
if (isset($_POST['Submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "select * from user
    where username = '".$username."' and password = '".$password."'";
  $result = mysqli_query($koneksi ,$sql);

  $cek = mysqli_num_rows($result);
  if ($cek > 0) {
    $_SESSION['username'] = $username;
    echo "<script>alert('Selamat Datang');
    window.location='menu.php'</script>";
  }else {
    echo "<script>alert('Maaf anda tidak memiliki akses');
    window.location='page-login.html'</script>";
  }
}
 ?>
