<?php
/*
 * while loop juga memiliki alternatif syntax seperti for yaitu menggunakan ':' dan harus di akhiri endwhile
 */
$counter = 1;
while ( $counter <=10){
    echo "ini adalah for loop ke - $counter". PHP_EOL;
    $counter++;
}

#contoh menggunakan alternatif syntax
$counter = 10;
while ( $counter >=1):
    echo "ini adalah for loop ke - $counter". PHP_EOL;
    $counter--;
endwhile;