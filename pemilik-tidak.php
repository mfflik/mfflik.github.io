<?php
    include 'connect.php';
    
    $id=$_GET['id'];

    $status_baru_tidak = "Ditolak";

    $ganti_status_pengajuan = mysqli_query($connect,"UPDATE pengajuan SET status_pengajuan='$status_baru_tidak' WHERE id_pengajuan='$id'");
    if($ganti_status_pengajuan){
        echo "
            <script>
                alert ('Pengajuan Ditolak');
                location = 'pemilik.php';
            </script>
        ";
    }
?>