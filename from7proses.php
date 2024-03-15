<?php
//mencetak angka genap dari 2 hingga 10 menggunakan loop while

$num = $_POST['angka'];
while ($num <= 10) {
    echo $num . "  ";
    $num += 2;
}