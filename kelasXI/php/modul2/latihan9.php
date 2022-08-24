<?php

$arrWarna = array("Blue", "Black", "Red", "Yellow", "Green");

echo "Menampilkan isi Array denga for : <br>";

for ($i = 0; $i<count($arrWarna); $i++) {
    echo "Do you like <font color=$arrWarna[$i]>". $arrWarna[$i]. "</font> ? <br>";
}

echo "<br> Menampilkan dengan ForEach : <br>";

foreach ($arrWarna as $warna) {
    echo "Do you like <font color=$warna>" .$warna ."</font>?<br>";
}

