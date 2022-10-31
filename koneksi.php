<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "koneksi";


$koneksi        = mysqli_connect($host,$user,$pass,$db);

if (!$koneksi) {
    echo "koneksi gagal";

    # code...
}

else {
    echo "koneksi berhasil";
}

