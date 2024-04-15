<?php
// Proses data pemesanan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $telepon = isset($_POST["telepon"]) ? $_POST["telepon"] : "";
    $paket = isset($_POST["paket"]) ? $_POST["paket"] : "";
    $pesan = isset($_POST["pesan"]) ? $_POST["pesan"] : "";
    $jumlah_tamu = isset($_POST["jumlah_tamu"]) ? $_POST["jumlah_tamu"] : "";
    $nik = isset($_POST["nik"]) ? $_POST["nik"] : "";
    $alamat = isset($_POST["alamat"]) ? $_POST["alamat"] : "";

    // Proses upload foto_ktp
    $target_dir_ktp = "uploads/";
    $target_file_ktp = $target_dir_ktp . basename($_FILES["foto_ktp"]["name"]);
    $uploadOk_ktp = 1;
    $imageFileType_ktp = strtolower(pathinfo($target_file_ktp, PATHINFO_EXTENSION));

    // Proses upload foto_struk
    $target_dir_struk = "uploads/";
    $target_file_struk = $target_dir_struk . basename($_FILES["foto_struk"]["name"]);
    $uploadOk_struk = 1;
    $imageFileType_struk = strtolower(pathinfo($target_file_struk, PATHINFO_EXTENSION));

    // Proses upload foto_konsultasi
    $target_dir_konsultasi = "uploads/";
    $target_file_konsultasi = $target_dir_konsultasi . basename($_FILES["foto_konsultasi"]["name"]);
    $uploadOk_konsultasi = 1;
    $imageFileType_konsultasi = strtolower(pathinfo($target_file_konsultasi, PATHINFO_EXTENSION));

    // Pindahkan file yang diunggah ke direktori yang ditentukan
    if (move_uploaded_file($_FILES["foto_ktp"]["tmp_name"], $target_file_ktp)) {
        echo "File foto_ktp ". basename( $_FILES["foto_ktp"]["name"]). " telah diunggah.";
    } else {
        echo "Maaf, ada kesalahan saat mengunggah file foto_ktp Anda.";
    }

    if (move_uploaded_file($_FILES["foto_struk"]["tmp_name"], $target_file_struk)) {
        echo "File foto_struk ". basename( $_FILES["foto_struk"]["name"]). " telah diunggah.";
    } else {
        echo "Maaf, ada kesalahan saat mengunggah file foto_struk Anda.";
    }

    if (move_uploaded_file($_FILES["foto_konsultasi"]["tmp_name"], $target_file_konsultasi)) {
        echo "File foto_konsultasi ". basename( $_FILES["foto_konsultasi"]["name"]). " telah diunggah.";
    } else {
        echo "Maaf, ada kesalahan saat mengunggah file foto_konsultasi Anda.";
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
