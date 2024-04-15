<?php
// Proses data pemesanan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $telepon = $_POST["telepon"];
    $paket = $_POST["paket"];
    $pesan = $_POST["pesan"];
    $jumlah_tamu = $_POST["jumlah_tamu"];
    $nik = $_POST["nik"];
    $alamat = $_POST["alamat"];

    // Proses upload foto
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Periksa apakah file gambar adalah gambar aktual atau gambar palsu
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if($check !== false) {
            echo "File adalah gambar - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }
    }

    // Pindahkan file yang diunggah ke direktori yang ditentukan
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        echo "File ". basename( $_FILES["foto"]["name"]). " telah diunggah.";
    } else {
        echo "Maaf, ada kesalahan saat mengunggah file Anda.";
    }

    // Set cookie dengan informasi pemesanan
    setcookie("nama", $nama, time() + (86400 * 30), "/"); // 86400 = 1 hari
    setcookie("email", $email, time() + (86400 * 30), "/");
    setcookie("telepon", $telepon, time() + (86400 * 30), "/");
    setcookie("paket", $paket, time() + (86400 * 30), "/");
    setcookie("pesan", $pesan, time() + (86400 * 30), "/");
    setcookie("jumlah_tamu", $jumlah_tamu, time() + (86400 * 30), "/");
    setcookie("nik", $nik, time() + (86400 * 30), "/");
    setcookie("alamat", $alamat, time() + (86400 * 30), "/");

    // Redirect ke halaman beranda setelah proses pemesanan selesai
    echo "<script>alert('Proses Pemesanan Berhasil!'); window.location.href = 'index.php';</script>";
    exit();  // Pastikan untuk melakukan exit setelah melakukan redirect
}
?>
