<?php
  include 'connect.php';

  $id = $_GET['id'];

  $data_query = mysqli_query($connect,"SELECT * FROM marketing WHERE id_marketing='$id'");
  $data = mysqli_fetch_array($data_query);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
        <h1 style="font-size:50pt; text-align:center;">CV. AMKA</h1>
      <h1>INVOICE</h1>
      <div id="company" class="clearfix">
        <div>CV. AMKA</div>
        <div>Jalan Raya cihampelas, mekarmukti<br /> Kec.cihampelas</div>
        <div>Kabupaten bandung barat</div>
        <div>Jawa barat 40562</div>
      </div>
      <div id="project">
        <div><span>PROJECT</span> Ajuan Pengadaan Barang</div>
        <div><span>CLIENT</span> <?php echo $data['konsumen_marketing'];?></div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th>No.</th>
            <th>TANGGAL</th>
            <th>KONSUMEN</th>
            <th>PRODUK</th>
            <th>JUMLAH</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><?php echo $data['tanggal_marketing']; ?></td>
            <td><?php echo $data['konsumen_marketing']; ?></td>
            <td><?php echo $data['produk_marketing']; ?></td>
            <td><?php echo $data['jumlah_marketing']; ?></td>
          </tr>
        </tbody>
      </table>
      
    </main>
    <footer>
      CV AMKA - Jalan Raya cihampelas, mekarmukti, Kec.cihampelas, Kabupaten bandung barat, Jawa barat 40562
    </footer>
  </body>
</html>