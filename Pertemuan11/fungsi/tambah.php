<!--Kode ini memungkinkan pengguna yang sudah login untuk menambahkan data anggota atau jabatan baru ke database. Pertama kode akan memeriksa apakah pengguna sudah login, jika belum maka akan diarahkan ke halaman login. 
Selanjutnya, kode memeriksa parameter jabatan atau anggota di URL untuk menentukan jenis data yang ingin ditambahkan. Jika parameter jabatan ditemukan, data jabatan baru akan ditambahkan ke database dengan informasi 
yang dimasukkan. Sementara jika parameter anggota ditemukan, data anggota baru akan dimasukkan ke database dengan informasi seperti username, password, nama, jenis kelamin, alamat, nomor telepon, jabatan, dan data login. 
Setelah proses selesai, pengguna akan diberi pesan tentang keberhasilan atau kegagalan penambahan data, dan mereka akan diarahkan kembali ke halaman daftar anggota atau jabatan.-->

<?php
session_start();
if (!empty($_SESSION['username'])) {
    // Memanggil file yang diperlukan untuk koneksi, pesan kilat, dan fungsi anti-injection.
    require 'config/koneksi.php';
    require 'fungsi/pesan_kilat.php';
    require 'fungsi/anti_injection.php';
    // Memeriksa parameter jabatan atau anggota di URL untuk menentukan jenis data yang akan ditambahkan.
    if (!empty($_GET['jabatan'])) {
        // Jika parameter jabatan ditemukan, data jabatan baru akan ditambahkan ke database dengan informasi yang dimasukkan.
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES('$jabatan', '$keterangan')";
        // Setelah proses selesai, pengguna akan diberi pesan tentang keberhasilan atau kegagalan penambahan jabatan, dan mereka akan diarahkan kembali ke halaman daftar jabatan.
        if (mysqli_query($koneksi, $query)) {
            pesan(
                'success',
                "Jabatan Baru Ditambahkan."
            );
        } else {
            pesan('danger', "Gagal Menambahkan Jabatan Karena: " . mysqli_error($koneksi));
        }
        header("Location: index.php?page=jabatan");
    } 
} elseif (!empty($_GET['anggota'])) {
    // Jika parameter anggota ditemukan, data anggota baru akan ditambahkan ke database dengan informasi seperti username, password, level, nama, jenis kelamin, alamat, dan nomor telepon.
    $username = antiinjection($koneksi, $_POST['username']);
    $password = antiinjection($koneksi, $_POST['password']);
    $level = antiinjection($koneksi, $_POST['level']);
    $jabatan = antiinjection($koneksi, $_POST['jabatan']);
    $nama = antiinjection($koneksi, $_POST['nama']);
    $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
    $alamat = antiinjection($koneksi, $_POST['alamat']);
    $no_telp = antiinjection($koneksi, $_POST['no_telp']);

    $salt = bin2hex(random_bytes(16));
    $combined_password = $salt . $password;
    $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);

    $query = "INSERT INTO user (username, password, salt, level) VALUES ('$username', '$hashed_password', '$salt','$level')";

    if (mysqli_query($koneksi, $query)) {
        $last_id = mysqli_insert_id($koneksi);
        $query2 = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp, user_id, jabatan_id) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp', '$last_id','$jabatan')";

        if (mysqli_query($koneksi, $query2)) {
            // Setelah proses selesai, pengguna akan diberi pesan tentang keberhasilan atau kegagalan penambahan anggota, dan mereka akan diarahkan kembali ke halaman daftar anggota.
            pesan('success', "Anggota Baru Ditambahkan.");
        } else {
            pesan('warning', "Gagal Menambahkan Anggota Tetapi Data Login Tersimpan Karena: " . mysqli_error($koneksi));
        }
    } else {
        pesan('danger', "Gagal Menambahkan Anggota Karena: " . mysqli_error($koneksi));
    }
    header("Location:/index.php?page=anggota");
} else {
    // Jika pengguna belum login, mereka akan diarahkan kembali ke halaman login.
    header("Location:/index.php?page=login");
}
?>
