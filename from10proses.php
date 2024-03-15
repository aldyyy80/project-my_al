<?php
//menghitung jumlah digit dalam suatu angka 

$angka = $_POST['angka'];
$jumlah_digit = 0;

while ($angka != 0) {
    $angka = floor($angka / 10);
    $jumlah_digit++;
}


echo "jumlah digit: $jumlah_digit";