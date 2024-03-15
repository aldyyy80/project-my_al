<?php
//menunjukan elemen-elemen dalam sebuah array menggunakan function

function jumlahkan($arr) {
    $total = 0;
    foreach ($arr as  $nilasi) {
        $total += $nilasi;
    }
    return $total;
}


$angka  = [1, 2, 3, 4, 5];
echo "total:" . jumlahkan($angka);