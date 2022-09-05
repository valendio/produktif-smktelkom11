<?php

$host = "localhost";
$db = "db_universitas";
$uname = "root";
$pass = "root";

$connect = mysqli_connect($host, $uname, $pass, $db);

if (!$connect){
    echo "koneksi ke database gagal : " .mysqli_connect_error();
}