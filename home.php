<?php
// Mulai sesi
session_start();

// Periksa apakah pengguna sudah login, jika tidak, arahkan ke halaman login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

// Proses logout jika diminta
if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
    session_destroy();
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f0f0f0; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh;">

    <div style="background-color: #4CAF50; color: #fff; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center;">
        <h1 style="margin: 0; font-size: 2.5rem;">Selamat Datang!</h1>
        <p style="font-size: 1.2rem;">Terima kasih telah mengunjungi situs kami. Semoga sehat selalu dan bahagia yaa❤️🫶</p>
        <a href="?logout=true" style="justify-content: center;">Logout tekan ini yaa!</a>
    </div>

</body>
</html>

