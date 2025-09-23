<?php
session_start();

// Xóa file key nếu có cookie
if (isset($_COOKIE['remember_key'])) {
    $cookieDir = __DIR__ . '/cookies';
    $key = basename($_COOKIE['remember_key']);
    $filePath = $cookieDir . '/' . $key;
    if (file_exists($filePath)) {
        unlink($filePath);
    }
    // Xóa cookie
    setcookie('remember_key', '', time() - 3600, "/");
}

session_destroy();
header('Location: login.php');
exit;
?>