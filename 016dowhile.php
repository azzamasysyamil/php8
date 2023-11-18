<?php
$a = 1;
do {
    echo "$a. Belajar Aja<br>";
    $a++;
} while ($a <= 10);

echo"<hr>";

$b = 10;
do {
    echo "$b. Belajar Aja<br>";
    $b--;
} while ($b >= 1);

echo"<h1>Bilangan Ganjil - Increment</h1>";
$b = 1;
do {
   echo "$b<br>";
   $b+=2;
} while ($b <= 10);

echo"<h1>Bilangan Genap - Decrement</h1>";
$c = 16;
do {
   echo "$c<br>";
   $c=$c-2;
} while ($c > 0);