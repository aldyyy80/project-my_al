<?php
//mencari rata-rata dari nilai-nilai dalam sebuah array menggunakan

function rata_rata($arr) {
    $total = $_POST['angka'];
    $count = count($arr);
    foreach ($arr as $nilasi) {
        $total += $nilasi;
    }
    return  $total / $count;
}
$angka = [10, 20, 30, 40, 50];
echo "rata_rata: " . rata_rata($angka);