<!--Kode ini adalah sebuah formulir HTML sederhana yang meminta pengguna untuk memasukkan nama dan email. Setelah formulir dikirimkan, 
PHP akan memproses data yang dikirimkan dengan memeriksa apakah input nama dan email tersedia dalam $_POST. Jika ada, PHP akan mengambil 
nilai input tersebut dan melakukan sanitasi menggunakan fungsi htmlspecialchars() untuk menghindari HTML injection, yaitu memasukkan kode 
HTML atau skrip jahat ke dalam input. Kemudian, PHP akan menampilkan kembali input yang sudah diproses ke layar.-->
<!DOCTYPE html>
<html>
<head>
    <title>HTML Injection</title>
</head>
<body>
    <h2>Formulir Input</h2>
    <!-- Form untuk memasukkan input -->
    <form method="post" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Memproses input setelah dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Periksa apakah input 'nama' dan 'email' tersedia dalam $_POST
        if(isset($_POST['nama']) && isset($_POST['email'])) {
            // Mengambil nilai input dari formulir
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            // Melakukan sanitasi input untuk menghindari HTML injection
            $nama = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
            $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
            // Menampilkan input yang sudah diproses
            echo "<h2>Input yang Dimasukkan</h2>";
            echo "Nama: " . $nama . "<br>";
            echo "Email: " . $email . "<br>";
        } else {
            echo "<p>Input tidak valid.</p>";
        }
    }
    ?>
</body>
</html>
