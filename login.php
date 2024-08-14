<?php
// Mulai sesi
session_start();

// Periksa apakah pengguna sudah login, jika iya, arahkan ke halaman utama
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: home.php');
    exit;
}

$login_error = '';

// Proses login ketika formulir disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Username dan password yang valid
    $valid_username = 'dapyaaa';
    $valid_password = 'dapdap2311';

    // Ambil data dari formulir
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Verifikasi username dan password
    if ($username === $valid_username && $password === $valid_password) {
        // Set sesi dan arahkan ke halaman utama
        $_SESSION['loggedin'] = true;
        header('Location: home.php');
        exit;
    } else {
        $login_error = 'Username atau password salah.';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
    <?php if ($login_error): ?>
        <p style="color: red;"><?php echo htmlspecialchars($login_error); ?></p>
    <?php endif; ?>
</body>
</html>