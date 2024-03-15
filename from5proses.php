<?php
//menampilkan harga makanan berdasarkan kode menu

$kode_menu =  $_POST['angka'];;
switch ($kode_menu) {
    case 'A':
        echo "harga makanan: Rp. 20.000";
        break;
    case 'B':
        echo "harga makanan: Rp. 25.000";
        break;
    case 'C':
        echo "harga makanan: Rp. 30.000";
        break;
    default:
        echo "menu tidak tersedia";
}