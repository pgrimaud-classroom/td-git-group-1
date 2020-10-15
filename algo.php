<?php

$x = 10;
$y = 20;

/**
 * exo 1
 */
$sum = $x + $y;

/**
 * exo 2
 */
$mul = $x * 2;

/**
 * exo 3
 */
$xxx = rand(1, 5);
/*if ($xxx === 1) {
    echo "hello";
} else if ($xxx === 2) {
    echo "salut";
} else {
    echo "yo";
}*/

switch($xxx) {
    case 1:
        echo "hello";
        break;
    case 2:
        echo "salut";
        break;
    case 3:
    case 4:
    case 5:
        echo "yo";
}

/**
 * exo 4
 */
$note = rand(0, 20);
if ($note <= 10){
    echo "bof";
} elseif ($note > 10 && $note <= 12) {
    echo "passable";
} elseif ($note > 12 && $note <= 14) {
    echo "assez bien";
} elseif ($note > 14 && $note <= 16) {
    echo "bien";
} else {
    echo "tres-bien";
}

/**
 * exo 5
 */
$age = 29;
$tern = ($age >= 23) ? "oui" : "non";

/**
 * exo 6
 */
function tax($salaire) {
    $tax = ($salaire < 1000) ? $salaire*(10/100) : $salaire*(25/100);
    return $tax;
}

/**
 * exo 7
 */

for ($i = 1 ; $i <= 100; $i++) {
    $sum += $i;
}
echo $sum;

$x = 0;
$i = 1;
while ($i <= 100) {
    $x += $i;
    $i++;
}
echo $x;

/**
 * exo 8
 */
for ($i = 1; $i < 100; $i++) {
    if($i % 3 === 0) {
        echo $i."\n"."fizz"."<br>";
    }
    if($i % 5 === 0) {
        echo $i."\n"."buzz"."<br>";
    }
    if($i % 15 === 0) {
        echo $i."\n"."fizzbuzz"."<br>";
    }
    if($i % 15 !== 0 && $i % 5 !== 0 && $i % 3 !== 0) {
        echo $i."\n"."<br>";
    }
}

/**
 * exo 9
 */

