<?php

include '../connect.php';

$kode = $_POST['kode'];
$id_dosen = $_POST['id_dosen'];
$nama_matkul = $_POST['matakuliah'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];

$query = "UPDATE matakuliah SET nama_matkul = '$nama_matkul', sks = '$sks', semester = '$semester', id_dosen = '$id_dosen'
         WHERE kode = '$kode'";

$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if(num>0){
    echo "Berhasil tambah data <br>";
} else {
    echo "Gagal Tambah data<br>";
} 
echo "<a href='read.php'>Lihat Data</a>";

?>

