<?php
$db_name = "mysql:host=db;dbname=db_dpw1";
$user_name ='root';
$user_password = 'admin';

try {
        $koneksi = new PDO($db_name, $user_name, $user_password);
        $koneksi -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException  $e){
        echo "Jepat njirr: " . $e->getMessage();
}

$email = mysqli_real_escape_string($mysqli, 'admin@gmail.com'); 
?>
