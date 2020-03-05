<?php
    include 'connect.php';

    session_start();
    if($_SESSION['login']['jenis_id'] == "produksi"){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Perencanaan Produksi</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
                <h5>Produksi</h5>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        
                        <li >
                            <a href="produksi.php">
                                <i class="fas fa-boxes"></i>Produksi</a>
                        </li>

                        <li class="active">
                            <a href="produksi-baru.php">
                                <i class="fas fa-boxes"></i>Rencana Produksi Baru</a>
                        </li>

                        <li>
                            <a href="rencana-produksi-baru.php?isi=tidak_ada">
                                <i class="fas fa-boxes"></i>Rencana Produksi Baru</a>
                        </li>
                    
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- MAIN CONTENT-->
            <div class="main-content" >
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="POST">
                                    <div class="user-data m-b-30"  style="padding-right:40px !important; padding-left:40px !important;">
                                        <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>Rencana Ajuan Baru</h3>
                                    <!-- USER DATA-->
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="filters m-b-45" style="padding-left:0px !important; padding-right:0px !important">
                                                <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border" style="width:100% !important;">
                                                    <select class="js-select2" name="jenis_produk">
                                                        <option selected="selected" value="kosong">Pilih Produk</option>
                                                        <option value="tlf">TLF</option>
                                                        <option value="tlhb">TLHB</option>
                                                        <option value="tln">TLN</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="filters m-b-45" style="padding-left:0px !important; padding-right:0px !important">
                                                <div class="rs-select2--dark rs-select2--md rs-select2--border" style="width:100% !important;">
                                                    <select class="js-select2 au-select-dark" name="bulan">
                                                        <option selected="selected">Pilih Bulan</option>
                                                        <option value="1">September - November</option>
                                                        <option value="2">Desember - Februari</option>
                                                        <option value="3">Maret - Mei</option>
                                                        <option value="4">Juni - Agustus</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <input class="au-input form-produksi" type="number" name="jumlah_produk" style="margin-top:0px !important" placeholder="Jumlah"> 
                                        </div>

                                        <div class="col-md-3">
                                            <button class="au-btn au-btn--green m-b-20 button-produksi" style="margin-top:0px !important" type="submit" name="submit">Submit</button>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                                <!-- END USER DATA-->
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <!-- SCRIPT PHP MUNCULIN TABEL -->
                                <?php
                                    if(isset($_POST['submit'])){

                                        $jumlah = $_POST['jumlah_produk'];
                                        if($_POST['bulan']=="1"){
                                            if($_POST['jenis_produk']=="tlf"){
                                                echo "
                                                    <script>
                                                        location = 'tabel-baru/tlf/sep-nov.php?jumlah=$jumlah';
                                                    </script>
                                                ";
                                            }

                                            elseif($_POST['jenis_produk']=="tlhb"){
                                                echo "
                                                    <script>
                                                        location = 'tabel-baru/tlhb/sep-nov.php?jumlah=$jumlah';
                                                    </script>
                                                ";
                                            }

                                            elseif($_POST['jenis_produk']=="tln"){
                                                echo "
                                                    <script>
                                                        location = 'tabel-baru/tln/sep-nov.php?jumlah=$jumlah';
                                                    </script>
                                                ";
                                            }
                                        }

                                        elseif($_POST['bulan']=="2"){
                                            if($_POST['jenis_produk']=="tlf"){
                                                echo "
                                                    <script>
                                                        location = 'tabel-baru/tlf/des-feb.php?jumlah=$jumlah';
                                                    </script>
                                                ";
                                            }

                                            elseif($_POST['jenis_produk']=="tlhb"){
                                                echo "
                                                    <script>
                                                        location = 'tabel-baru/tlhb/des-feb.php?jumlah=$jumlah';
                                                    </script>
                                                ";
                                            }

                                            elseif($_POST['jenis_produk']=="tln"){
                                                echo "
                                                    <script>
                                                        location = 'tabel-baru/tln/des-feb.php?jumlah=$jumlah';
                                                    </script>
                                                ";
                                            }
                                        }

                                        elseif($_POST['bulan']=="3"){
                                            if($_POST['jenis_produk']=="tlf"){
                                                echo "
                                                    <script>
                                                        location = 'tabel-baru/tlf/mar-mei.php?jumlah=$jumlah';
                                                    </script>
                                                ";
                                            }

                                            elseif($_POST['jenis_produk']=="tlhb"){
                                                echo "
                                                    <script>
                                                        location = 'tabel-baru/tlhb/mar-mei.php?jumlah=$jumlah';
                                                    </script>
                                                ";
                                            }

                                            elseif($_POST['jenis_produk']=="tln"){
                                                echo "
                                                    <script>
                                                        location = 'tabel-baru/tln/mar-mei.php?jumlah=$jumlah';
                                                    </script>
                                                ";
                                            }
                                        }

                                        elseif($_POST['bulan']=="4"){
                                            if($_POST['jenis_produk']=="tlf"){
                                               echo "
                                                    <script>
                                                        location = 'tabel-baru/tlf/jun-ags.php?jumlah=$jumlah';
                                                    </script>
                                                ";
                                            }

                                            elseif($_POST['jenis_produk']=="tlhb"){
                                                echo "
                                                    <script>
                                                        location = 'tabel-baru/tlhb/jun-ags.php?jumlah=$jumlah';
                                                    </script>
                                                ";
                                            }

                                            elseif($_POST['jenis_produk']=="tln"){
                                                echo "
                                                    <script>
                                                        location = 'tabel-baru/tln/jun-ags.php?jumlah=$jumlah';
                                                    </script>
                                                ";
                                            }
                                        }
                                    }
                                ?>
                                <!-- END SCRIPT PHP MUNCULIN TABEL -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

<?php
    }

    else{
        echo "
            <script>
                alert ('Anda harus login sebagai Bagian Produksi');
                location = 'login.html';
            </script>
        ";
    }
?>
