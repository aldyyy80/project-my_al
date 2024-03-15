<?php
//mengurutkan elemen-elemen dalam sebuah array secara asceding menggunakan function

function urutkan($arr) {
    sort($arr);
    return $arr;
}

$angka = [5, 3, 8, 1, 2];
$angka_urut = urutkan($angka);
echo "array setelah diurutkan: " . implode(",", $angka_urut);