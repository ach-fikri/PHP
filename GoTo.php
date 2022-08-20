<?php
/*
 * goto merupakan fitur yang ada di php untuk melakukan eksekusi di baris tertentu(loncat)
 * goto ini jarang digunakan dan sebaiknya dalam satu program jangan banyak menggunakan goto ini karena akan mempersulit programer lain untuk membaca kodingan kita.
 * makin banya goto akan mempusingkkan sebaiknya hindari goto;
 */
goto a;
echo "hello word" . PHP_EOL;
a :
echo "HEllo Fik" . PHP_EOL;

#goto pada perulangan
$counter = 1;
while (true){
    echo "ini adalah for loop ke - $counter". PHP_EOL;
    $counter++;

    if ($counter > 10){
        goto end;
    }
}

end :
    echo "End Loop";