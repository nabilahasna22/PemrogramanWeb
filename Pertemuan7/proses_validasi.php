<!--berfungsi untuk memproses data yang dikirimkan melalui metode POST dari sebuah formulir. 
Pertama, kode mengambil nilai dari input nama, email, dan password yang dikirimkan. Selanjutnya, 
dilakukan validasi untuk memastikan bahwa nama dan email tidak kosong, dan email memiliki format 
yang valid menggunakan fungsi filter_var() dengan parameter FILTER_VALIDATE_EMAIL. Kemudian, dilakukan 
juga validasi untuk memastikan bahwa password tidak kosong dan memiliki panjang minimal 8 karakter. 
Jika terdapat kesalahan validasi, pesan kesalahan akan ditampilkan. Jika tidak ada kesalahan, maka data 
akan diproses lebih lanjut, seperti menyimpan data ke dalam database atau mengirimkan email. Dalam contoh ini, 
data yang berhasil divalidasi akan ditampilkan kembali, termasuk nama, email, dan password.-->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pass = $_POST["password"];//penambahan password
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
    // Jika ada kesalahan validəsi
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error. "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        // Misalnya, menyimpan data ke database atau mengirim email
        echo "Data berhasil dikirim:<br> Nama $nama <br>Email = $email <br>$pass";
    }
}
?>