<?php
 function perkenalan () {
     echo "Hello World my name is Oryza Valendio <br>";
     echo "Nice to meet you <br>";

 }

 perkenalan();

 echo "<hr>";

 perkenalan();

// With param
echo "<hr>";
function data ($name, $age, $school) {
    echo "Hello my name is : $name <br>";
    echo "My age is : $age <br>";
    echo "And now i'm student in : $school <br>";
}

$name = "Oryza Valendio";
$age = 17;
$school = "SMK Telkom Malang";

data($name, $age, $school);

