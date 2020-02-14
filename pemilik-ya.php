<?php
    include 'connect.php';
    
    $id=$_GET['id'];

    $data_query = mysqli_query($connect,"SELECT * FROM pengajuan WHERE `id_pengajuan`='$id'");
    $data = mysqli_fetch_array($data_query);

    
        
    $tanggal = $data['tanggal_pengajuan'];
    $produk = $data['produk_pengajuan'];
    $jumlah = $data['jumlah_pengajuan'];
    $status = "Menunggu Pengiriman";
    $status_baru_ya = "Diterima";
    $input_gudang = mysqli_query($connect,"INSERT INTO gudang (tanggal_gudang,produk_gudang,jumlah_gudang,status_gudang) VALUES ('$tanggal','$produk','$jumlah','$status')");

    $ganti_status_pengajuan = mysqli_query($connect,"UPDATE pengajuan SET status_pengajuan='$status_baru_ya' WHERE id_pengajuan='$id'");
    if($ganti_status_pengajuan){
        echo "
            <script>
                alert ('Pengajuan Diterima');
                location = 'pemilik.php';
            </script>
        ";
    }
?>