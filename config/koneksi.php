<?php

$db_name = 'mysql:host=db;dbname=muriacell'; // Ganti dengan alamat IP container MySQL
$user_name = 'muriacell';
$user_password = 'muriacell';

try {
    $conn = new PDO($db_name, $user_name, $user_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
