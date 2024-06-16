<?php

include "../config/koneksi.php";

session_start();

if ($_GET['mod'] == 'tambah') {
    $nama      = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $email     = mysqli_real_escape_string($koneksi, $_POST['email']);
    $subjek    = mysqli_real_escape_string($koneksi, $_POST['subjek']);
    $pesan     = mysqli_real_escape_string($koneksi, $_POST['pesan']);

    mysqli_query(
        $koneksi,
        "INSERT INTO pesan (nama, email, subjek, pesan)
         VALUES ('$nama', '$email', '$subjek', '$pesan')"
    );

    header("location:../page.php?mod=contact");
}
?>
