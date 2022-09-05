<?php
session_start();
if (isset($_SESSION["user"]));{
    header("locaton:beranda.php");
}
include ("function.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET["error"])){
        if ($_GET["error"] == "wrong"){
            echo '<h3>Username Dan Password Salah!</h3>';
        }
    }
    if (isset($_GET["notif"])) {
        if ($_GET["notif"] == "logout") {
            echo '<h3>Berhasil LogOut!</h3>';
        }
    }
    if(isset($_POST['submit'])){
        echo do_login($_POST['username'], $_POST['password']);
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    Username : <input type="text" name="username"><br>
    Password : <input type="password" name="password" id=""> <br>
    <input type="submit" value="SIGN IN" name="submit">
    </form>
    
</body>
</html>