<!--Kode ini memungkinkan pengguna yang sudah login untuk menghapus data anggota atau jabatan dari database. Pertama, kode akan memeriksa sesi pengguna 
untuk memastikan login sebelum memproses permintaan. Selanjutnya, kode mengecek parameter jabatan atau anggota di URL untuk menentukan jenis data yang 
akan dihapus. Jika parameter jabatan ditemukan, kode akan menghapus data jabatan dari database berdasarkan ID yang diberikan. Sedangkan jika parameter 
anggota ditemukan, kode akan menghapus data anggota dan mencoba menghapus data login terkait. Setelah proses selesai, pengguna akan diberi pesan tentang 
keberhasilan atau kegagalan penghapusan, dan mereka akan diarahkan kembali ke halaman daftar anggota atau jabatan.-->

<?php
// Memulai sesi untuk memeriksa status login pengguna.
session_start();
// Memeriksa apakah sesi username pengguna tidak kosong, yang menandakan bahwa pengguna sudah login.
if (!empty($_SESSION['username'])) {
    // Memanggil file koneksi, pesan kilat, dan fungsi anti injection yang diperlukan.
    require '/config/koneksi.php';
    require '/fungsi/pesan_kilat.php';
    require '/fungsi/anti_injection.php';
    // Memeriksa apakah terdapat parameter jabatan atau anggota di URL untuk menentukan jenis data yang akan dihapus.
    if (!empty($_GET['jabatan'])) {
        // Mengambil ID jabatan dari URL dan membersihkannya dari potensi serangan SQL injection.
        $id = antiinjection($koneksi, $_GET['id']);
        // Membuat dan menjalankan query untuk menghapus data jabatan berdasarkan ID yang diberikan.
        $query = "DELETE FROM jabatan WHERE id = '$id'";
        // Menjalankan query untuk menghapus data jabatan dan memberikan pesan sukses atau gagal.
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        // Mengarahkan pengguna kembali ke halaman daftar jabatan setelah proses selesai.
        header("Location:/index.php?page=jabatan");
    } elseif (!empty($_GET['anggota'])) {
        // Mengambil ID anggota dari URL dan membersihkannya dari potensi serangan SQL injection.
        $id = antiinjection($koneksi, $_GET['id']);
        // Membuat dan menjalankan query untuk menghapus data anggota berdasarkan ID yang diberikan.
        $query = "DELETE FROM anggota WHERE user_id = '$id'";
        // Menjalankan query untuk menghapus data anggota.
        if (mysqli_query($koneksi, $query)) {
            // Jika penghapusan anggota berhasil, kode akan mencoba menghapus data login terkait.
            $query2 = "DELETE FROM user WHERE id = '$id'";
            // Menjalankan query untuk menghapus data login terkait dengan anggota.
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Anggota Telah Terhapus.");
            } else {
                pesan('warning', "Data Anggota Terhapus Tetapi Login Tidak Terhapus Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Anggota Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        // Mengarahkan pengguna kembali ke halaman daftar anggota setelah proses selesai.
        header("Location:/index.php?page=anggota");
    }
}
?>

