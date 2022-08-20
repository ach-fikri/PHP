<?php
/*
 * dalam perulangan for di php for terdiri dari beberapa bagian yaitu :
 * for(init statment; kondisi; post statment) init statment hanya akan di eksekusi satu kali di awal, kondisi dilakukan pengecekan di setiap perulangan jika true dia akan melakukan perulangan, post statment akan dieksekusi diakhir perulangan semua ini tidak wajib di isi akan tetapi jika kondisi tidak di isi makan akan dianggap selalu benilai true
 * di php mempunya syntax alternatif sama seperti if, swict yaitu tidak harus tutup kurung kurawa cukup menggunakan ':' akan tetepi harus di akhriri endfor;
 */
for ($counter = 1; $counter <=10 ;  $counter++){
    echo "ini adalah for loop ke - $counter". PHP_EOL;
}

#contoh alternatif syntax
for ($counter = 10; $counter>= 1; $counter--) :
    echo "hello for loop :".$counter.PHP_EOL;
endfor;


