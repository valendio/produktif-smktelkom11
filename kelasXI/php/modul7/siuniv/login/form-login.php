<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>

<h1>Login</h1>

<form action="login.php" method="post">
    <table>
        <tr>
            <td>Username</td> <td>:</td>
            <td><input type="text" name="username" id="username"></td>
        </tr>
        <tr>
            <td>Password</td> <td>:</td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
                <td></td>   <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </table>
</form>


    
</body>
</html>