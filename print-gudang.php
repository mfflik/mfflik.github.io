<?php
  include 'connect.php';

  $id = $_GET['id'];

  $data_query = mysqli_query($connect,"SELECT * FROM gudang WHERE id_gudang='$id'");
  $data = mysqli_fetch_array($data_query);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Surat Jalan</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header>
         <div align="right">
  <h2> Surat Jalan</h2>
</div> 
        <!--<h2 text-align:"right"></h2>-->
      <!-- <h1>INVOICE</h1> -->
      <div id="company" class="clearfix">
        <div><span>Tanggal</span>  <?php echo $data['tanggal_gudang'];?></div>
      </div>
      <div id="project">
        <div>CV. AMKA</div>
        <div>Jalan Raya Cihampelas, Mekarmukti<br /> Kec.Cihampelas</div>
        <div>Kabupaten Bandung Barat</div>
        <div>Jawa barat 40562</div><br>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th>No.</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><?php echo $data['produk_gudang']; ?></td>
            <td><?php echo $data['jumlah_gudang']; ?></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <br>
    Catatan : <br>
    <br>
            1. Surat Jalan ini merupakan bukti resmi penerimaan barang <br>
            2. Surat Jalan ini bukan bukti penjualan<br>
            <br>
      <i>BARANG SUDAH DITERIMA DALAM KEADAAN BAIK DAN CUKUP OLEH : </i>
          <br><br><br>
        <div>Penerima / Pembeli &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;   Petugas Gudang &emsp; &emsp;&emsp;  &emsp;&emsp;  &emsp;&emsp;  &emsp; &emsp;  &emsp;  &emsp;  &emsp;  &emsp;   &emsp;   Bagian Pengiriman</div>
        <br><br><br><br>
     <div>_______________&emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;  &emsp;   ________________&emsp;&emsp;  &emsp;&emsp;  &emsp;&emsp;  &emsp; &emsp;  &emsp;  &emsp;  &emsp;  &emsp;   &emsp;   ________________</div>
    </main>
    <!-- <footer>
      CV AMKA - Jalan Raya Cihampelas, Mekarmukti, Kec.Cihampelas, Kabupaten Bandung Barat, Jawa Barat 40562
    </footer> -->
  </body>
</html>