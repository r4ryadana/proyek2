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
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
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
               <a class="navbar-brand" href="./">MENU PESANAN</a>
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
                        </div>
                    </div>
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
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
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
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Tambah Pesanan Baru</h1>
                    </div>
                </div>
            </div>
        </div>

		<div class="row clearfix">
			
			<div class="col-md-12" id="tambah-pesanan-card" hidden="">
				<div class="card">
					<form id="tambah-pesanan-form">
						<div class="header">
							<div class="pull-left loading-container"></div>
							<div class="pull-right"><a href="#" id="tutup-tab" class="text-danger"><i class="fa fa-times fa-2x"></i></a></div>
							<div class="clearfix"></div>
							<br>
							<select class="ms" name="namapelanggan" required=""></select>
						</div>
						<div class="body">
							<table class="table table-sm table-bordered">
								<thead>
									<tr>
										<th>Menu</th>
										<th>Jumlah Beli</th>
										<th class="text-center"><a href="#" class="text-success" id="tambah-tab-input" title="tambah kolom"><i class="fa fa-fw fa-plus"></i></a></th>
									</tr>
								</thead>
								<tbody>
								</tbody>
								<tfoot>
									<tr id="button-form-pesanan" hidden="">
										<td colspan="2"></td>
										<td style="text-align: center;">
											<button type="submit" class="btn btn-primary btn-sm waves-effect">Tambah</button>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</form>
				</div>
			</div>

			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<div class="pull-left">
							<i class="fa fa-fw fa-shopping-cart"></i> Data pesanan
						</div>
						<div class="pull-right">
							<button class="btn btn-sm bg-pink waves-effect" id="buka-tab-tambah-pesanan"><i class="fa fa-fw fa-plus"></i> Tambah Pesanan</button>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="body">
						<table class="table table-bordered table-hovered table-pesanan" width="100%">
							<thead>
								<tr>
									<th>ID pesanan</th>
									<th>Kodepesanan</th>
									<th>Nama Pelangan</th>
									<th>Menu</th>
									<th>Qty</th>
									<th>Total (Rp)</th>
									<th>Dibuat</th>
									<th>Action</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
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
