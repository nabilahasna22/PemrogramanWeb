<?php
// Mengimpor koneksi ke database
include('koneksi.php');

// Mendapatkan aksi yang diminta dari parameter URL
$aksi = $_GET['aksi'];

// Memeriksa jenis aksi yang diminta
if ($aksi == 'tambah') {
    // Memeriksa apakah data yang dibutuhkan sudah tersedia
    if (isset($_POST['nama'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['no_telp'])) {
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];

        // Membuat query untuk menambahkan data anggota ke database
        $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";

        // Menjalankan query dan mengarahkan kembali ke halaman utama jika berhasil
        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($koneksi);
        }
    } else {
        echo "Data tidak lengkap.";
    }
} elseif ($aksi == 'ubah') {
    // Memeriksa apakah data yang dibutuhkan untuk mengubah data anggota sudah tersedia
    if (isset($_POST['id'], $_POST['nama'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['no_telp'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];

        // Membuat query untuk mengubah data anggota
        $query = "UPDATE anggota SET nama='$nama', jenis_kelamin = '$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' WHERE id = $id";

        // Menjalankan query dan mengarahkan kembali ke halaman utama jika berhasil
        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal mengupdate data: " . mysqli_error($koneksi);
        }
    } else {
        echo "Data tidak lengkap.";
    }
} elseif ($aksi == 'hapus') {
    // Memeriksa apakah ID yang akan dihapus sudah tersedia
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Membuat query untuk menghapus data anggota berdasarkan ID
        $query = "DELETE FROM anggota WHERE id = $id";

        // Menjalankan query dan mengarahkan kembali ke halaman utama jika berhasil
        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal menghapus data: " . mysqli_error($koneksi);
        }
    } else {
        echo "ID tidak valid.";
    }
} else {
    // Jika aksi tidak valid, maka arahkan kembali ke halaman utama
    header("Location: index.php");
}

// Menutup koneksi ke database
mysqli_close($koneksi);
?>
