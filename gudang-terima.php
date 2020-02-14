<?php
    include 'connect.php';
    
    $id=$_GET['id'];

    $data_query = mysqli_query($connect,"SELECT * FROM gudang WHERE `id_gudang`='$id'");
    $data = mysqli_fetch_array($data_query);

    
        
    $tanggal = $data['tanggal_gudang'];
    $produk = $data['produk_gudang'];
    $konsumen = "Produksi";
    $jumlah = $data['jumlah_gudang'];
    $status_baru = "Barang Telah Diterima";
    $input_marketing = mysqli_query($connect,"INSERT INTO marketing (tanggal_marketing,konsumen_marketing,produk_marketing,jumlah_marketing) VALUES ('$tanggal','$konsumen','$produk','$jumlah')");

    $ganti_status_gudang = mysqli_query($connect,"UPDATE gudang SET status_gudang='$status_baru' WHERE id_gudang='$id'");
    if($ganti_status_gudang){
        echo "
            <script>
                alert ('Barang Telah Diterima');
                location = 'gudang.php';
            </script>
        ";
    }
?>