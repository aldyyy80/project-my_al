<?php
//menemukan faktorial dari suatu angka

$angka = $_POST['angka'];
$faktorial = 1;
for ($i = 1; $i <= $angka; $i++) {
    $faktorial *= $i;
}

echo "faktorial dari $angka adalah $faktorial";