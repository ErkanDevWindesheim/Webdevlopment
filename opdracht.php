<?php

$hobbies = ['Gamen', 'Voetbal', 'lezen', 'tv kijken', 'muziek luisteren'];

foreach ($hobbies as $hobby) {
    echo $hobby . "<br>";
}

// for loop


for ($i = 0; $i <= 10; $i++) {
    echo 5*$i . "<br>";
}

$lijn = "*";

for ($i = 0; $i <= 6; $i++) {
    echo $lijn . "<br>";
    $lijn .= "*";
}