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
    <title>Rencana Produksi Baru</title>

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
                        
                        <li>
                            <a href="produksi.php">
                                <i class="fas fa-boxes"></i>Produksi</a>
                        </li>

                        <li class="">
                            <a href="produksi-baru.php?jumlah=0">
                                <i class="fas fa-boxes"></i>Pengadaan Material</a>
                        </li>

                        <li class="active">
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
            <?php
                $isi = $_GET['isi'];
                if($isi=='ada'){    
                    $x1 = $_POST['x1'];
                    $x2 = $_POST['x2'];
                    $x3 = $_POST['x3'];
                    $x4 = $_POST['x4'];
                    $x5 = $_POST['x5'];
                    $x6 = $_POST['x6'];
                    $x7 = $_POST['x7'];
                    $x8 = $_POST['x8'];
                    $x9 = $_POST['x9'];
                    $x10 = $_POST['x10'];
                    $x11 = $_POST['x11'];
                    $x12 = $_POST['x12'];

                    $D16 = 12;
                    $F18 = 78;
                    $G18 = 650;
                    $E18 = $x1+$x2+$x3+$x4+$x5+$x6+$x7+$x8+$x9+$x10+$x11+$x12;
                    $H18 = ($x1*1)+($x2*2)+($x3*3)+($x4*4)+($x5*5)+($x6*6)+($x7*7)+($x8*8)+($x9*9)+($x10*10)+($x11*11)+($x12*12);

                    $B4 = ($D16*$H18)-($F18*$E18);
                    $B5 = ($D16*$G18)-($F18*$F18);
                    $B6 = $B4/$B5;

                    $B9 = $E18/$D16;
                    $B10 = $F18/$D16;
                    $B11 = $B6*$B10;
                    $B12 = $B9-$B11;


                    $x13 = round($B12 + ($B6*13));
                    $x14 = round($B12 + ($B6*14));
                    $x15 = round($B12 + ($B6*15));
                    $x16 = round($B12 + ($B6*16));
                    $x17 = round($B12 + ($B6*17));
                    $x18 = round($B12 + ($B6*18));
                    $x19 = round($B12 + ($B6*19));
                    $x20 = round($B12 + ($B6*20));
                    $x21 = round($B12 + ($B6*21));
                    $x22 = round($B12 + ($B6*22));
                    $x23 = round($B12 + ($B6*23));
                    $x24 = round($B12 + ($B6*24));

                    $m1 = $x13+$x14+$x15;
                    $m2 = $x16+$x17+$x18;
                    $m3 = $x19+$x20+$x21;
                    $m4 = $x22+$x23+$x24;

                    $query_input = "INSERT INTO rpp (t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13,t14,t15,t16,t17,t18,t19,t20,t21,t22,t23,t24) VALUES ('$x1','$x2','$x3','$x4','$x5','$x6','$x7','$x8','$x9','$x10','$x11','$x12','$x13','$x14','$x15','$x16','$x17','$x18','$x19','$x20','$x21','$x22','$x23','$x24')";
                    $input = mysqli_query($connect,$query_input);


                    
            ?>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4">
                                <form method="POST" action="rencana-produksi-baru.php?isi=ada">
                                    <!-- USER DATA-->
                                    <div class="user-data m-b-30" style="padding-left:40px !important; padding-right:40px !important;">
                                        <div class="table-responsive table--no-card m-b-30" >
                                            <table class="table table-borderless table-striped table-earning table-khusus">
                                                <thead>
                                                    <tr>
                                                        <th width="10%" style="padding:20px!important;">(t)</th>
                                                        <th style="padding:20px!important;">(X)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="td-rpp">1</td>
                                                        <td><input type="number" class="input-rpp" name="x1" value="<?php echo $x1?>" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">2</td>
                                                        <td><input type="number" class="input-rpp" name="x2" value="<?php echo $x2?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">3</td>
                                                        <td><input type="number" class="input-rpp" name="x3" value="<?php echo $x3?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">4</td>
                                                        <td><input type="number" class="input-rpp" name="x4" value="<?php echo $x4?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">5</td>
                                                        <td><input type="number" class="input-rpp" name="x5" value="<?php echo $x5?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">6</td>
                                                        <td><input type="number" class="input-rpp" name="x6" value="<?php echo $x6?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">7</td>
                                                        <td><input type="number" class="input-rpp" name="x7" value="<?php echo $x7?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">8</td>
                                                        <td><input type="number" class="input-rpp" name="x8" value="<?php echo $x8?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">9</td>
                                                        <td><input type="number" class="input-rpp" name="x9" value="<?php echo $x9?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">10</td>
                                                        <td><input type="number" class="input-rpp" name="x10" value="<?php echo $x10?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">11</td>
                                                        <td><input type="number" class="input-rpp" name="x11" value="<?php echo $x11?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">12</td>
                                                        <td><input type="number" class="input-rpp" name="x12" value="<?php echo $x12?>" Required></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="hitung">Submit</button>
                                    </div>
                                </form>
                                <!-- END USER DATA-->
                            </div>

                            <div class="col-lg-4">
                                <form method="POST">
                                    <!-- USER DATA-->
                                    <div class="user-data m-b-30" style="padding-left:40px !important; padding-right:40px !important;">
                                        <div class="table-responsive table--no-card m-b-30" >
                                            <table class="table table-borderless table-striped table-earning table-khusus">
                                                <thead>
                                                    <tr>
                                                        <th width="10%" style="padding:20px!important;">(t)</th>
                                                        <th style="padding:20px!important;">(X)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="td-rpp">13</td>
                                                        <td><input type="number" class="input-rpp" name="x13" value="<?php echo round($x13); ?>" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">14</td>
                                                        <td><input type="number" class="input-rpp" name="x14" value="<?php echo round($x14) ?>" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">15</td>
                                                        <td><input type="number" class="input-rpp" name="x15" value="<?php echo round($x15) ?>" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">16</td>
                                                        <td><input type="number" class="input-rpp" name="x16" value="<?php echo round($x16) ?>" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">17</td>
                                                        <td><input type="number" class="input-rpp" name="x17" value="<?php echo round($x17) ?>" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">18</td>
                                                        <td><input type="number" class="input-rpp" name="x18" value="<?php echo round($x18) ?>" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">19</td>
                                                        <td><input type="number" class="input-rpp" name="x19" value="<?php echo round($x19) ?>" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">20</td>
                                                        <td><input type="number" class="input-rpp" name="x20" value="<?php echo round($x20) ?>" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">21</td>
                                                        <td><input type="number" class="input-rpp" name="x21" value="<?php echo round($x21) ?>" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">22</td>
                                                        <td><input type="number" class="input-rpp" name="x22" value="<?php echo round($x22) ?>" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">23</td>
                                                        <td><input type="number" class="input-rpp" name="x23" value="<?php echo round($x23) ?>" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">24</td>
                                                        <td><input type="number" class="input-rpp" name="x24" value="<?php echo round($x24) ?>" disabled></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </form>
                                <!-- END USER DATA-->
                            </div>

                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="user-data m-b-30" style="padding-left:40px !important; padding-right:40px !important; margin-top:100px; margin-bottom:5px !important;">
                                            <input type="number" class="input-rpp" name="m1" value="<?php echo $m1; ?>" style="font-size:10pt" disabled>
                                            <a href="produksi-baru.php?jumlah=<?php echo $m1; ?>" class="au-btn au-btn--block au-btn--green m-b-20" style="margin-top:20px; margin-bottom:45px; text-align:center;">Pilih</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="user-data m-b-30" style="padding-left:40px !important; padding-right:40px !important; margin-bottom:5px !important;">
                                            <input type="number" class="input-rpp" name="m2" value="<?php echo $m2; ?>" style="font-size:10pt;" disabled>
                                            <a href="produksi-baru.php?jumlah=<?php echo $m2; ?>" class="au-btn au-btn--block au-btn--green m-b-20" style="margin-top:20px; margin-bottom:40px;  text-align:center;">Pilih</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="user-data m-b-30" style="padding-left:40px !important; padding-right:40px !important; margin-bottom:5px !important;">
                                            <input type="number" class="input-rpp" name="m3" value="<?php echo $m3; ?>" style="font-size:10pt;" disabled>
                                            <a href="produksi-baru.php?jumlah=<?php echo $m3; ?>" class="au-btn au-btn--block au-btn--green m-b-20" style="margin-top:20px; margin-bottom:45px;  text-align:center;">Pilih</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="user-data m-b-30" style="padding-left:40px !important; padding-right:40px !important;">
                                            <input type="number" class="input-rpp" name="m4" value="<?php echo $m4; ?>" style="font-size:10pt;" disabled>
                                            <a href="produksi-baru.php?jumlah=<?php echo $m4; ?>" class="au-btn au-btn--block au-btn--green m-b-20" style="margin-top:20px; margin-bottom:40px;  text-align:center;">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <?php
                }

                else{
            ?>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <form method="POST" action="rencana-produksi-baru.php?isi=ada">
                                    <!-- USER DATA-->
                                    <div class="user-data m-b-30" style="padding-left:40px !important; padding-right:40px !important;">
                                        <div class="table-responsive table--no-card m-b-30" >
                                            <table class="table table-borderless table-striped table-earning table-khusus">
                                                <thead>
                                                    <tr>
                                                        <th width="10%" style="padding:20px!important;">Periode (t)</th>
                                                        <th style="padding:20px!important;">Permintaan Produk (X)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="td-rpp">1</td>
                                                        <td><input type="number" class="input-rpp" name="x1" value="<?php echo $x1?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">2</td>
                                                        <td><input type="number" class="input-rpp" name="x2" value="<?php echo $x2?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">3</td>
                                                        <td><input type="number" class="input-rpp" name="x3" value="<?php echo $x3?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">4</td>
                                                        <td><input type="number" class="input-rpp" name="x4" value="<?php echo $x4?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">5</td>
                                                        <td><input type="number" class="input-rpp" name="x5" value="<?php echo $x5?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">6</td>
                                                        <td><input type="number" class="input-rpp" name="x6" value="<?php echo $x6?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">7</td>
                                                        <td><input type="number" class="input-rpp" name="x7" value="<?php echo $x7?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">8</td>
                                                        <td><input type="number" class="input-rpp" name="x8" value="<?php echo $x8?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">9</td>
                                                        <td><input type="number" class="input-rpp" name="x9" value="<?php echo $x9?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">10</td>
                                                        <td><input type="number" class="input-rpp" name="x10" value="<?php echo $x10?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">11</td>
                                                        <td><input type="number" class="input-rpp" name="x11" value="<?php echo $x11?>" Required></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">12</td>
                                                        <td><input type="number" class="input-rpp" name="x12" value="<?php echo $x12?>" Required></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="hitung">Submit</button>
                                    </div>
                                </form>
                                <!-- END USER DATA-->
                            </div>

                            <div class="col-lg-6">
                                <form method="POST">
                                    <!-- USER DATA-->
                                    <div class="user-data m-b-30" style="padding-left:40px !important; padding-right:40px !important;">
                                        <div class="table-responsive table--no-card m-b-30" >
                                            <table class="table table-borderless table-striped table-earning table-khusus">
                                                <thead>
                                                    <tr>
                                                        <th width="10%" style="padding:20px!important;">Periode (t)</th>
                                                        <th style="padding:20px!important;">Permintaan Produk (X)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="td-rpp">13</td>
                                                        <td><input type="number" class="input-rpp" name="x13" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">14</td>
                                                        <td><input type="number" class="input-rpp" name="x14" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">15</td>
                                                        <td><input type="number" class="input-rpp" name="x15" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">16</td>
                                                        <td><input type="number" class="input-rpp" name="x16" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">17</td>
                                                        <td><input type="number" class="input-rpp" name="x17" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">18</td>
                                                        <td><input type="number" class="input-rpp" name="x18" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">19</td>
                                                        <td><input type="number" class="input-rpp" name="x19" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">20</td>
                                                        <td><input type="number" class="input-rpp" name="x20" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">21</td>
                                                        <td><input type="number" class="input-rpp" name="x21" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">22</td>
                                                        <td><input type="number" class="input-rpp" name="x22" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">23</td>
                                                        <td><input type="number" class="input-rpp" name="x23" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-rpp">24</td>
                                                        <td><input type="number" class="input-rpp" name="x24" disabled></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </form>
                                <!-- END USER DATA-->
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <?php } ?>
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

<!-- SCRIPT INPUT DATA KE DATABASE -->
<?php
    if(isset($_POST['ajukan'])){
        $tanggal=date('Y-m-d');
        $produk = $_POST['pilih_produk'];
        $jumlah = $_POST['jumlah_produk'];
        $text = "Menunggu Konfirmasi";

        $input_data = mysqli_query($connect,"INSERT INTO pengajuan (tanggal_pengajuan,produk_pengajuan,jumlah_pengajuan,status_pengajuan) VALUES ('$tanggal','$produk','$jumlah','$text')");

        if($input_data){
            echo "
                <script>
                    alert ('Pengajuan Telah Dibuat');
                    location = 'produksi.php';
                </script>
            ";
        }
    }
?>
<!-- END SCRIPT INPUT DATA KE DATABASE -->

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
