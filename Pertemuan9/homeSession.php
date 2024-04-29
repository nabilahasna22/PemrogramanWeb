<html>
<head>
    <!-- Bagian kepala dokumen HTML -->
    <title>Home</title>
    <!-- Judul halaman -->
</head>
<body>
    <?php
    // Mulai sesi PHP
    session_start();

    // Periksa apakah pengguna sudah login
    if (isset($_SESSION["status"]) == 'login') {
        // Jika sudah login, tampilkan pesan selamat datang dan link untuk logout
        echo "Selamat datang " . $_SESSION['username'];
    ?>
        <br>
        <a href="sessionLogout.php">Log Out</a>
    <?php
    } else {
        // Jika belum login, tampilkan pesan dan tautan untuk login
        echo "Anda belum login, silahkan ";
    ?>
        <a href="sessionLoginForm.html">Log In</a>
    <?php
    }
    ?>
</body>
</html>
