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

        input[type="nama"],
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
        <h2>Sign Up</h2>
        <p>Daftarkan Email Anda.</p> <!-- Mengubah teks menjadi "Password" -->
        
        <label for="nama">Nama*</label><br>
        <input type="nama" name="nama" id="nama" required><br><br>

        <label for="email">Email*</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Password*</label><br> <!-- Mengubah label menjadi "Password" dan name menjadi "password" -->
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" name="submit" value="Submit">

        <p>Sudah punya akun? <a href="form.php">Login</a></p>
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Periksa apakah email sudah tersimpan dalam session
    if(isset($_SESSION['email'])) {
        // Email sudah tersimpan, arahkan ke halaman login
        echo "<script>alert('Anda sudah login. Silakan menuju halaman login.'); window.location.href = 'login.php';</script>";
        exit(); // Keluar dari skrip
    }

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pass = $_POST["password"]; //penambahan password
    $errors = array();
    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }
    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
    // penambahan validasi password
    if (empty($pass)) {
        $errors[] = "Password harus diisi";
    } else if (strlen($pass) < 8) {
        $errors[] = "Password minimal 8 karakter.";
    }
    // Jika tidak ada kesalahan validasi
    if (empty($errors)) {
        // Simpan data pengguna ke dalam session
        $_SESSION['nama'] = $nama;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $pass;
        // Tampilkan popup selamat datang
        echo "<script>alert('Selamat datang, $nama!'); window.location.href = 'index.php';</script>";
        exit();
    } else {
        // Jika ada kesalahan validasi, tampilkan pesan error
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>

</body>
</html>
