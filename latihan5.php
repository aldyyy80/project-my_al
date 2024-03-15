<?php
//mengecek apakah sebuah string merupakan palindrom atau tidak 

$kata = "malam";
if (strrev($kata) == $kata) {
    echo "palindrom";
} else {
    echo "bukan palindrom";
}