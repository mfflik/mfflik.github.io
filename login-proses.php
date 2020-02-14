<?php
    include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query_cari_username = mysqli_query($connect,"SELECT * FROM user WHERE `username` = '$username' AND `password` = '$password'");
    $cek_username = mysqli_num_rows($query_cari_username);

    $data = mysqli_fetch_array($query_cari_username);

    if($cek_username>0){
        if($data['jenis_id']=="produksi"){
            session_start();
            $_SESSION['login'] = $data;

            echo "
                <script>
                    alert ('Login sebagai bagian Perencanaan Produksi');
                    location = 'produksi.php';
                </script>
            ";
        }

        if($data['jenis_id']=="pemilik"){
            session_start();
            $_SESSION['login'] = $data;

            echo "
                <script>
                    alert ('Login sebagai Pemilik');
                    location = 'pemilik.php';
                </script>
            ";
        }

        if($data['jenis_id']=="gudang"){
            session_start();
            $_SESSION['login'] = $data;

            echo "
                <script>
                    alert ('Login sebagai bagian gudang');
                    location = 'gudang.php';
                </script>
            ";
        }

        if($data['jenis_id']=="marketing"){
            session_start();
            $_SESSION['login'] = $data;
            
            echo "
                <script>
                    alert ('Login sebagai bagian Marketing');
                    location = 'marketing.php';
                </script>
            ";
        }

    }

    else{
        echo "
            <script>
                alert ('Username Atau Password Salah!');
                location = 'login.html';
            </script>
        ";
    }
?>