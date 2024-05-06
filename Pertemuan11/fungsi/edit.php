<!--Kode ini memungkinkan pengguna yang sudah login untuk mengubah data anggota atau jabatan di database. Pertama, kode akan memeriksa apakah pengguna sudah login. Jika belum, maka akan diarahkan 
ke halaman login. Selanjutnya, kode mengecek parameter jabatan atau anggota di URL untuk menentukan jenis data yang ingin diubah. Jika parameter jabatan ditemukan, data jabatan akan diperbarui di 
database berdasarkan ID dan informasi yang dimasukkan. Sedangkan jika parameter anggota ditemukan, data anggota termasuk nama, jabatan, jenis kelamin, alamat, nomor telepon, dan username akan 
diperbarui di database. Jika disediakan, password baru juga akan diperbarui dengan aman. Setelah proses selesai, pengguna akan diberi pesan tentang keberhasilan atau kegagalan update, dan mereka 
akan diarahkan kembali ke halaman daftar anggota atau jabatan.-->

<?php
session_start();
if (!empty($_SESSION['username'])) {
    // Memanggil file-file yang diperlukan untuk koneksi, pesan kilat, dan fungsi anti injection.
    require '/config/koneksi.php'; // File untuk melakukan koneksi ke database.
    require '/fungsi/pesan_kilat.php'; // File untuk menampilkan pesan kepada pengguna.
    require '/fungsi/anti_injection.php'; // File untuk mencegah serangan SQL Injection.
    
    // Kode kemudian mengecek parameter jabatan atau anggota di URL untuk menentukan jenis data yang ingin diubah.
    if (!empty($_GET['jabatan'])) {
        // Jika parameter jabatan ditemukan, data jabatan akan diperbarui di database berdasarkan ID dan informasi yang dimasukkan.
        $id = antiinjection($koneksi, $_POST['id']); // Mencegah serangan SQL Injection pada ID.
        $jabatan = antiinjection($koneksi, $_POST['jabatan']); // Mencegah serangan SQL Injection pada jabatan.
        $keterangan = antiinjection($koneksi, $_POST['keterangan']); // Mencegah serangan SQL Injection pada keterangan.
        $query = "UPDATE jabatan SET jabatan = '$jabatan' ,keterangan = '$keterangan' WHERE id = '$id'"; // Query untuk mengubah data jabatan.
        
        // Setelah proses selesai, pengguna akan diberi pesan tentang keberhasilan atau kegagalan update, dan mereka akan diarahkan kembali ke halaman daftar jabatan.
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Diubah."); // Menampilkan pesan sukses kepada pengguna.
        } else {
            pesan('danger', "Mengubah Jabatan Karena: " . mysqli_error($koneksi)); // Menampilkan pesan error kepada pengguna jika gagal.
        }
        header("Location:/index.php?page=jabatan"); // Mengarahkan pengguna kembali ke halaman daftar jabatan.
    
    } elseif (!empty($_GET['anggota'])) {
        // Jika parameter anggota ditemukan, data anggota termasuk nama, jabatan, jenis kelamin, alamat, nomor telepon, dan username akan diperbarui di database.
        $user_id = antiinjection($koneksi, $_POST['id']); // Mencegah serangan SQL Injection pada user ID.
        $nama = antiinjection($koneksi, $_POST['nama']); // Mencegah serangan SQL Injection pada nama.
        $jabatan = antiinjection($koneksi, $_POST['jabatan']); // Mencegah serangan SQL Injection pada jabatan.
        $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']); // Mencegah serangan SQL Injection pada jenis kelamin.
        $alamat = antiinjection($koneksi, $_POST['alamat']); // Mencegah serangan SQL Injection pada alamat.
        $no_telp = antiinjection($koneksi, $_POST['no_telp']); // Mencegah serangan SQL Injection pada nomor telepon.
        $username = antiinjection($koneksi, $_POST['username']); // Mencegah serangan SQL Injection pada username.
        // Membuat dan menjalankan query untuk memperbarui data anggota dan username di database.
        $query_anggota = "UPDATE anggota SET nama = '$nama' ,jabatan_id = '$jabatan',jenis_kelamin = '$jenis_kelamin',alamat = '$alamat',no_telp = '$no_telp' WHERE user_id = '$user_id'";
        
        // Setelah proses selesai, pengguna akan diberi pesan tentang keberhasilan atau kegagalan update, dan mereka akan diarahkan kembali ke halaman daftar anggota.
        if (mysqli_query($koneksi, $query_anggota)) {
            // Jika disediakan, password baru juga akan diperbarui dengan aman.
            if (!empty($_POST['password'])) {
                $password = $_POST['password']; // Mendapatkan password baru dari pengguna.
                $salt = bin2hex(random_bytes(16)); // Menghasilkan salt secara acak untuk keamanan password.
                $combine_password = $salt . $password; // Menggabungkan salt dan password.
                $hashed_password = password_hash($combine_password, PASSWORD_BCRYPT); // Melakukan hash pada password yang digabungkan dengan salt.
                // Membuat dan menjalankan query untuk memperbarui password di database.
                $query_user = "UPDATE user SET username = '$username' ,password = '$hashed_password', salt = '$salt' WHERE id = '$user_id'";
                // Menampilkan pesan ke pengguna tentang keberhasilan atau kegagalan proses update password.
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah."); // Menampilkan pesan sukses kepada pengguna.
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah Tetapi Password Gagal Diubah Karena: " . mysqli_error($koneksi)); // Menampilkan pesan error jika gagal mengubah password.
                }
            } else {
                // Jika tidak ada password baru, hanya username yang diperbarui.
                $query_user = "UPDATE user SET username = '$username' WHERE id = '$user_id'";
                // Menampilkan pesan ke pengguna tentang keberhasilan atau kegagalan proses update username.
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah."); // Menampilkan pesan sukses kepada pengguna.
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah Tetapi Username Gagal Diubah Karena: " . mysqli_error($koneksi)); // Menampilkan pesan error jika gagal mengubah username.
                }
            }
        } else {
            pesan('danger', "Mengubah Anggota Karena: " . mysqli_error($koneksi)); // Menampilkan pesan error jika gagal mengubah data anggota.
        }
        header("Location:/index.php?page=anggota"); // Mengarahkan pengguna kembali ke halaman daftar anggota.
    }
}
?>
