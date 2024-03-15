<?php
//mengecek apakah sebuah string merupakan palindrom atau tidak 

$kata =  $_POST['angka'];
if (strrev($kata) == $kata) {
    echo "palindrom";
} else {
    echo "bukan palindrom";
}