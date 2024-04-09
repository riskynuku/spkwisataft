<?php
	session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "")
	{
		header("location:login.php?pesan=Belum Login");
		exit;
	}
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SPK Wisata | Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="icon" href="https://www.pinclipart.com/picdir/big/7-75302_clip-art-transparent-library-world-png-jokingart-com.png">
    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
    ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
  <!-- wave CSS
    ============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <link rel="stylesheet" href="css/wave/button.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
    ============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- Data Table JS
    ============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="adminstyle.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="alternatif.php"><img src="img/logo/log.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menu"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                    <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Admin</h3>
                                                    <p>Sedang Login</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="logout.php">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <!--<li><a data-toggle="collapse" data-target="#Charts" href="dashboard.php">Beranda</a></li>-->
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Data Fuzzy</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="alternatif.php">Alternatif</a></li>
                                        <li><a href="kriteria-fuzzy.php">Kriteria Fuzzy</a></li>
                                        <li><a href="nilai-fuzzy.php">Nilai Fuzzy</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Charts" href="dataadmin.php">Data Admin</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <!--<li class="active"><a href="dashboard.php"><i class="notika-icon notika-house"></i> Beranda</a>
                        </li>-->
                        <li class="active"><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-menus"></i> Data Fuzzy</a>
                        </li>
                        <li class=""><a href="dataadmin.php"><i class="notika-icon notika-support"></i> Data Admin</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">    
                        </div>
                        <div id="Tables" class="tab-pane active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="alternatif.php">Alternatif</a>
                                </li>
                                <li><a href="kriteria-fuzzy.php">Kriteria Fuzzy</a>
                                </li>
                                <li><a href="nilai-fuzzy.php">Nilai Fuzzy</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Home" class="tab-pane notika-tab-menu-bg animated flipInX">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- Breadcomb area Start-->
  <div class="breadcomb-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="breadcomb-wp">
                  <div class="breadcomb-icon">
                    <i class="notika-icon notika-windows"></i>
                  </div>
                  <div class="breadcomb-ctn">
                    <h2>DATA NILAI FUZZY</h2>
                    <p>Selamat Datang <span class="bread-ntd">Admin</span></p>
                  </div>
                </div>
              </div>
              <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                <div class="breadcomb-report">
                  <a data-toggle="tooltip" data-placement="left" title="Tambah Nilai" href="add-nilai-fuzzy.php"><span class="btn-lg btn-success success-icon-notika btn-reco-mg btn-button-mg notika-icon notika-plus-symbol"> Tambah</span></a>
                </div>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd" style="text-align: right;">
                            <a data-toggle="tooltip" data-placement="left" title="Tambah Nilai Fuzzy" href="add-nilai-fuzzy.php"><span class="btn-lg btn-success success-icon-notika btn-reco-mg btn-button-mg notika-icon notika-plus-symbol"> Tambah</span></a>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Nilai</th>
                                        <th>Nama Alternatif</th>
                                        <th>Nama Kriteria</th>
                                        <th>Nilai</th>
                                        <th>Bawah</th>
                                        <th>Tengah</th>
                                        <th>Atas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
									$querynilai = mysqli_query($db, "SELECT * FROM nilai_fuzzy ORDER BY id_alternatif, id_kriteria_fuzzy");
									while ($datanilai = mysqli_fetch_array($querynilai))
									{
										$queryalternatif = mysqli_query($db, "SELECT * FROM alternatif WHERE id_alternatif = '$datanilai[id_alternatif]'");
										$dataalternatif = mysqli_fetch_array($queryalternatif);
										$querykriteria = mysqli_query($db, "SELECT * FROM kriteria_fuzzy WHERE id_kriteria_fuzzy = '$datanilai[id_kriteria_fuzzy]'");
										$datakriteria = mysqli_fetch_array($querykriteria);
								?>
                                
                                    <tr>
                                	<td><?php echo $datanilai['id_nilai_fuzzy']; ?></td>
    							     <td><?php echo $dataalternatif['nama_alternatif']; ?></td>
    							     <td><?php echo $datakriteria['nama_kriteria_fuzzy']; ?></td>
    							     <td><?php echo $datanilai['nilai']; ?></td>
    								<td><?php echo $datanilai['bawah']; ?></td>
    								<td><?php echo $datanilai['tengah']; ?></td>
    								<td><?php echo $datanilai['atas']; ?></td>
    								<td>
    								   <a href="edit-nilai-fuzzy.php?id_nilai_fuzzy=<?php echo $datanilai['id_nilai_fuzzy']; ?>" class="btn btn-success success-icon-notika btn-reco-mg btn-button-mg notika-icon notika-edit" data-toggle="tooltip" title="Ubah"></a>
    									<a href="del-nilai-fuzzy.php?id_nilai_fuzzy=<?php echo $datanilai['id_nilai_fuzzy']; ?>" class="btn btn-danger danger-icon-notika btn-reco-mg notika-icon notika-trash" data-toggle="tooltip" title="Hapus"></a>
								 	</td>
									</tr>
										<?php
											}
										?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID Nilai</th>
                                        <th>Nama Alternatif</th>
                                        <th>Nama Kriteria</th>
                                        <th>Nilai</th>
                                        <th>Bawah</th>
                                        <th>Tengah</th>
                                        <th>Atas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
    ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
    ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
    ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
    ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
    ============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!--  Chat JS
    ============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
    ============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
  <!--  wave JS
    ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- Data Table JS
    ============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="js/main.js"></script>
  <!-- tawk chat JS
    ============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>
</html>