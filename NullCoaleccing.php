<?php
/*operasi ini digunakan untuk pengecekan apakah ada atau tidak
  sebelumnya unntuk mengecek sebuah data ada atau tidak kita menggunakan 'isset' untuk mengeceknya.
  dengan operator ini akan lebih singkat, operqator ini ditandai dengan '??'
*/

$data = [];
#contoh tampa coalescing operator :
//    if (isset($data["action"])){
//        $action = $data["action"];
//    }else{
//        $action ="nothing";
//    }

#contoh menggunakan coalescing
$action = $data["action"] ?? "nothing";
echo $action;