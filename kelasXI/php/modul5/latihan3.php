<?php
function luasLingkaran($jari) {
    $x = pi() * $jari * $jari;
    return $x;
}

$r = 10;

echo "Luas lingkaran dengan jari jari $r : ";

luasLingkaran($r);