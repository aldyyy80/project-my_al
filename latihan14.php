<?php
//mencari nilai terbesar dalam sebuah array menggunakan function

function nilai_terbesar($arr) {
    $max = $arr[0];
    foreach ($arr as $nilai) {
        if ($nilai > $max) {
            $max = $nilai;
        }
    }
    return $max;
}

$angka = [10, 5, 20, 15, 30];
echo "nilai terbesar: " . nilai_terbesar($angka);