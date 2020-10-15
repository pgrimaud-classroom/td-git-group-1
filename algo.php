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
    echo $note."/20 : Bof";
} elseif ($note > 10 && $note <= 12) {
    echo $note."/20 : Passable";
} elseif ($note > 12 && $note <= 14) {
    echo $note."/20 : Assez bien";
} elseif ($note > 14 && $note <= 16) {
    echo $note."/20 : Bien";
} else {
    echo $note."/20 : Tres-bien";
}

/**
 * exo 5
 */
$age = 29;
$older_than_23 = $age >= 23 ? "oui" : "non";
echo $older_than_23;

/**
 * exo 6
 */
function tax(int $salaire) {
    $tax = ($salaire < 1000) ? $salaire*(10/100) : $salaire*(25/100);
    return $tax;
}
echo tax(1600);

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


function tree($lines)
{
    for($i=1; $i<$lines; $i++)
    {
        if($i <= ($lines/2))
        {
            echo str_repeat('a', $i)."\n";
        }else{
            echo str_repeat('a', ($lines-$i))."\n";
        }
    }
}
tree(10);

/**
 * exo 10
 */
$user = [
    "firstname" => "pierre",
    "lastname" => "grimaud",
    "age" => "30",
    "job" => "teacher",
];
foreach ($user as $key => $value) {
    echo $key.": ".$value."<br>";
}

/**
 * exo 11
 */

$numbers = [];
for ($i = 1; $i <= 100; $i++) {
    $numbers[] = rand(10, 1000);
    if ($numbers[$i] > $numbers[$i+1]) {

    }
}
echo $numbers;






