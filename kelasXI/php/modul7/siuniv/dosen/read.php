<?php

include '../connect.php';

$query = "SELECT * FROM dosen";

$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>

<table border='1'>
    <h2>Data dosen</h2>
    <tr>
        <th>No. </th>
        <th>Nama dosen</th>
        <th>Telepon</th>
    </tr>

    <?php
    if($num > 0) {
        $no = 1;
        while($data = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" .$no ."</td>";
            echo "<td>" .$data['nama dosen'] . "</td>";
            echo"<td>" .$data['telp'] ."</telp>";
            echo "</tr>";
            $no++;

        }
    } else {
        echo "<td colspan='3'> Tidak ada data </td>";
    }
    ?>
</table>
    
</body>
</html>