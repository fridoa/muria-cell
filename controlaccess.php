<?php
if (!function_exists('checkAccess')) {
    function checkAccess($roles)
    {
        if (!isset($_SESSION['role']) || !in_array($_SESSION['role'], $roles)) {
            header('Location: ../index.php');
            exit();
        }
    }
}

if (!function_exists('checkAdminAccess')) {
    function checkAdminAccess()
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            header('Location: ../index.php');
            exit();
        }
    }
}

if (!function_exists('checkReporterAccess')) {
    function checkReporterAccess()
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'reporter') {
            header('Location: ../index.php');
            exit();
        }
    }
}

if (!function_exists('checkUserAccess')) {
    function checkUserAccess()
    {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
            header('Location: ../index.php');
            exit();
        }
    }
}
