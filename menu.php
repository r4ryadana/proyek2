<?php
include ("koneksi.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WARUNG RADIT</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">WARUNG RADIT</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="menu.php"> <i class="menu-icon fa fa-calendar-minus-o"></i>Menu Restoran</a>
                    </li>
                     <li class="active">
                        <a href="pelanggan.php"> <i class="menu-icon fa fa-male"></i>Pelanggan</a>
                    </li>
                    <li class="active">
                        <a href="pesanan.php"> <i class="menu-icon fa fa-shopping-cart"></i>Pesanan</a>
                    </li>
                    <li class="active">
                        <a href="transaksi.php"> <i class="menu-icon fa fa-money"></i>Transaksi</a>
                    </li>
                    <li class="active">
                    
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="menu-icon fa fa-bars"></i>
                            Laporan
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-print"></i>Cetak</a>
<!--                            <a class="nav-link" href="page-login.html"><i class="fa fa-power-off"></i>Logout</a>-->
                        </div>
                    </div>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="form_ubah_password.php"><i class="fa fa-cog"></i>Ubah Password</a>
                            <a class="nav-link" href="page-login.html"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                    


                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                    </div>

                </div>
            </div>

        </header>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Menu Restoran</h1>
                    </div>
                </div>
            </div>
        </div><!-- /header -->
        <!-- Header-->

<!--
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Menu</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Pencarian</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
-->
        

        <div class="content mt-3">
         <div class="animated fadeIn">
          <div class="container-fluid">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                    <br>
                    <br>
                      <th>Nama Menu</th>
                      <th>Harga Menu</th>
                        <th>Jumlah Menu yang Tersedia</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM menu");
                      ?>
                     <tr>
                        <?php 
                           while($hasil = mysqli_fetch_assoc($query)) {
                        ?>   
                          <td class="text-center"><?php echo $hasil['nama_menu']; ?></td>
                          <td class="text-center"><?php echo $hasil['harga_menu']; ?></td>
                            <td class="text-center"><?php echo $hasil['jumlah_menu_tersedia']; ?></td>
                          <td class="text-center">
                            <a href="form_update_menu.php?id_menu=<?php echo $hasil['id_menu'];?>"><button type="button" class="btn btn-primary">Edit <span class="glyphicon glyphicon-pencil "></span></button></a>
                         
                            <a href="proses_hapus_menu.php?id_menu=<?php echo $hasil['id_menu'];?>" onclick="return confirm('Apakah Anda yakin?');"><button type="button" class="btn btn-danger">Delete <span class="glyphicon glyphicon-trash "></span></button></a>
                          </td>
                        
				</td>
                      </tr>
                        <?php }?>
                  </tbody>
                </table>
                  <form class="" action="i" method="get">
                  <br>
                    <a class="btn btn-primary form-group" style="" href="form_menu.php">Tambah Menu Makanan</a>
                  <br>
                </form>
              </div>
            </div>
          </div> 
        </div>
         </div>   
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
