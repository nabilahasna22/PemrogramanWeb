<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo-wo.png">
    <title>Form Login</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        form h2 {
            text-align: center;
            font-size: 30px;
            margin-bottom: 25px;
            display: block;
        }

        label {
            display: block;
            margin-bottom: 2px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #d3c02f;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #baa928;
        }
        p{
            text-align: center;
            margin-bottom: 35px;
        }
    </style> 
</head>
<body>
    <!-- Form untuk memasukkan input -->
    <form method="post" action="">
        <h2>Login</h2>
        <p>Masukkan Email dan Password Anda.</p> <!-- Mengubah teks menjadi "Password" -->
        <label for="email">Email*</label><br>
        <input type="text" name="email" id="email" required><br><br>

        <label for="password">Password*</label><br> <!-- Mengubah label menjadi "Password" dan name menjadi "password" -->
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" name="submit" value="Submit">

        <p>Belum punya akun? <a href="signup.php">Sign Up</a></p>
        
    </form>
    <?php
session_start(); // Mulai session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Periksa apakah email dan password sesuai dengan yang tersimpan di session
    if(isset($_SESSION['nama']) && isset($_SESSION['email']) && isset($_SESSION['password'])) {
        $saved_nama = $_SESSION['nama'];
        $saved_email = $_SESSION['email'];
        $saved_password = $_SESSION['password'];

        // Validasi email dan password
        if ($nama === $saved_nama &&$email === $saved_email && $password === $saved_password) {
            // Login berhasil, arahkan ke halaman beranda
            echo "<script>alert('Login berhasil. Selamat datang, $saved_nama!'); window.location.href = 'index.php';</script>";
            exit(); // Keluar dari skrip
        } else {
            // Email atau password tidak cocok, tampilkan pesan error
            echo "<script>alert('Email atau password salah. Silakan coba lagi.'); window.location.href = 'login.php';</script>";
            exit(); // Keluar dari skrip
        }
    } else {
        // Tidak ada email dan password yang tersimpan, tampilkan pesan error
        echo "<script>alert('Anda belum melakukan sign up. Silakan daftar terlebih dahulu.'); window.location.href = 'signup.php';</script>";
        exit(); // Keluar dari skrip
    }
}
?>

</body>
</html>
