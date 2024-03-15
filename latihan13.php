<?php
//mengalikan elemen-elemen dalam sebuah array menggunakan function

function kalikan ($arr) {
    $total = 1;
    foreach ($arr as $nilasi) {
        $total *= $nilasi;
    }
    return $total;
}

$angka = [1, 2, 3, 4, 5];
echo "hasil kali: " . kalikan($angka);