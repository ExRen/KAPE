<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'jdih';
    $conn = mysqli_connect('$host', '$user', '$pass', '$db');
    if($conn){
        //echo "Koneksi Berhasil";
    }
    mysqli_connect($conn, $db)
?>
