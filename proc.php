<?php

$temporaryFolder = $_FILES['foto'] ['tmp_name'];
$target_dir = 'uploads/';
$target_file = $target_dir . basename($_FILES['foto']['name']);

move_upload_file($temporaryFolder, $target_file);

echo 'Halo ' $_POST ['nama_lengkap'] '<br>'; 
echo 'Alamat kamu : ' $_POST['alamat'] '<br>';
echo '<img width="100x" src="/belajar_php_1/uploads/' . $_FILES
['foto'] ['nama'] '">';