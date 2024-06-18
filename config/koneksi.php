<?php

$db_name = 'mysql:host=db;dbname=muriacell'; // Ganti dengan alamat IP container MySQL
$user_name = 'muriacell';
$user_password = 'muriacell';

try {
    $koneksi = new PDO($db_name, $user_name, $user_password);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
