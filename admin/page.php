<?php
session_start();
include "../controlaccess.php";

if (!isset($_SESSION['email'])) {
    header('Location: ../page.php?mod=login');
    exit();
}

if (isset($_GET['mod'])) {
    $mod = $_GET['mod'];

    switch ($mod) {
        case 'home':
            include "home.php";
            break;
        case 'pengguna':
            checkAdminAccess();
            include "pengguna.php";
            break;
        case 'lihat':
            checkAccess(['admin', 'reporter']);
            include "lihatdata.php";
            break;
        case 'kelola':
            checkAccess(['admin', 'reporter']);
            include "keloladata.php";
            break;
        case 'logout':
            session_destroy();
            header('Location: ../page.php?mod=home');
            exit();
        case 'ubah':
            checkAccess(['admin', 'reporter']);
            include "editdata.php";
            break;
        default:
            echo "Halaman tidak ditemukan.";
            break;
    }
} else {
    echo "Halaman tidak ditemukan.";
}
