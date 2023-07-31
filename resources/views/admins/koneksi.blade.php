@extends("Layout.koneksi")
@section("konek")
    <?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'jdih-backup';
    $conn = mysqli_connect('$host', '$user', '$pass', '$db');
    if ($conn) {
        echo 'Koneksi Berhasil';
    }
    mysqli_connect($conn, $db);
    ?>
@endsection
