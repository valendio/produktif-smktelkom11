<?php
include '../connect.php';
session_start();
// if(!(isset($_SESSION['user']))){
//     header("location: ../login/form-login.php");
// }

$username = $_POST['username'];
$password = md5($_POST['password']);

if($username == "" || $password == ""){
    header("location: form-login.php");
} else {
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);

    $num = mysqli_num_rows($result);

    if($num ==1 ){
        $_SESSION['user'] = $username;
        header("location: ../matakuliah/read.php");

    } else {
        header("location: form-login.php");
    }
}

?>
