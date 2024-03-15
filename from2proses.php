<?php
//mengecek apakah  suatu tahun kabisat atau bukan

$tahun = $_POST['angka'];
if ($tahun % 4 == 0) {
    if ($tahun % 100 == 0) {
        if ($tahun % 400 == 0) {

            echo "tahun kabisat";
        } else {
            echo "bukan tahun kabisat";
        }
    } else {
        echo "tahun kabisat";
    }
} else {
    echo "bukan tahun kabisat";
}