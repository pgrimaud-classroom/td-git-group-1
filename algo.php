<?php

$x = 10;
$y = 20;

$sum = $x + $y;
$mul = $x * 2;

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

