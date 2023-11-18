<?php
$a = 1;
while ($a <= 10) {
    echo "$a. Belajar Programming Itu Menyenangkan<br>";
   $a++;
}
echo "<hr>";

$b = 1000;
while ($b >= 1) {
    echo "$b. Belajar aja<br>";
   $b--;
}
echo "<hr>";

$counter = 0;
    //Nested Loop and Conditions
    for( $i = 2; $i <= 1000; $i++ ){
        $counter = 0;
        for( $k = 2; $k < $i; $k++ ){
            if( $i % $k == 0 ){
                $counter +=1;
                break;
            }
        }
        if($counter == 0){
            echo "$i. <br>";
        }
    }