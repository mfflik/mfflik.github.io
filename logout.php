<?php
    include 'connect.php';

    session_start();
    session_destroy();
    
    echo "
            <script>
                alert ('logout Berhasil');
                location = 'login.html';
            </script>
        ";
?>