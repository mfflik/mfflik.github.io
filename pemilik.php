<?php
    include 'connect.php';

    session_start();
    if($_SESSION['login']['jenis_id'] == "pemilik"){
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
    <title>Pemilik</title>

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
                <h5>Pemilik</h5>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        
                        <li class="active">
                            <a href="Pemilik.php">
                                <i class="fas fa-user"></i>Pemilik</a>
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
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Konfirmasi</h3>
                                        <div class="table-responsive table--no-card m-b-30" >
                                            <form method="POST">
                                                <table class="table table-borderless table-striped table-earning table-khusus" style="width:100% !important">
                                                    <thead >
                                                        <tr>
                                                            <th width=5%>No.</th>
                                                            <th width=5%>Tanggal</th>
                                                            <th>Produk</th>
                                                            <th>Jumlah</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- SCRIPT AMBIL DATA -->
                                                        <?php 
                                                            $no = 1;

                                                            $data_pengajuan = mysqli_query($connect,"SELECT * FROM pengajuan WHERE status_pengajuan = 'Menunggu Konfirmasi'");
                                                            $cek = mysqli_num_rows($data_pengajuan);

                                                            if($cek<1){
                                                        ?>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td>Belum Ada Pengajuan</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        
                                                        <?php
                                                            }
                                                            
                                                            else{
                                                                while($data = mysqli_fetch_array($data_pengajuan)){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $data['tanggal_pengajuan']; ?></td>
                                                            <td><?php echo $data['produk_pengajuan']; ?></td>
                                                            <td><?php echo $data['jumlah_pengajuan']; ?></td>
                                                            <td><a href="pemilik-ya.php?id=<?php echo $data['id_pengajuan']; ?>" class="button-pemilik-ya">SETUJUI</a><a href="pemilik-tidak.php?id=<?php echo $data['id_pengajuan']; ?>" class="button-pemilik-tidak">TIDAK</a></td>
                                                        </tr>
                                                        <?php
                                                                    $no++;
                                                                }
                                                            }
                                                        ?>
                                                        <!-- END SCRIPT AMBIL DATA -->
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Sudah Terkonfirmasi</h3>
                                        <div class="table-responsive table--no-card m-b-30" >
                                            <table class="table table-borderless table-striped table-earning table-khusus" style="width:100% !important">
                                                <thead >
                                                    <tr>
                                                        <th width=5%>No.</th>
                                                        <th width=5%>Tanggal</th>
                                                        <th>Produk</th>
                                                        <th>Jumlah</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- SCRIPT AMBIL DATA -->
                                                    <?php 
                                                        $no = 1;

                                                        $data_pengajuan = mysqli_query($connect,"SELECT * FROM pengajuan WHERE status_pengajuan = 'Diterima' OR status_pengajuan = 'Ditolak'");
                                                        $cek_lagi = mysqli_num_rows($data_pengajuan);

                                                            if($cek_lagi<1){
                                                        ?>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td>Belum Ada Pengajuan</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        
                                                        <?php
                                                            }
                                                            
                                                            else{           
                                                                while($data = mysqli_fetch_array($data_pengajuan)){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><?php echo $data['tanggal_pengajuan']; ?></td>
                                                        <td><?php echo $data['produk_pengajuan']; ?></td>
                                                        <td><?php echo $data['jumlah_pengajuan']; ?></td>
                                                        <td><?php echo $data['status_pengajuan']; ?></td>
                                                    </tr>
                                                    <?php
                                                                $no++;
                                                                }
                                                            }
                                                    ?>
                                                    <!-- END SCRIPT AMBIL DATA -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
                alert ('Anda harus login sebagai Pemilik!');
                location = 'login.html';
            </script>
        ";
    }
?>