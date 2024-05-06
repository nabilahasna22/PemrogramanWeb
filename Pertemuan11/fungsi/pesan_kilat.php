<!--Fungsi ini dirancang untuk mengelola flash data dalam suatu aplikasi web. Flash data adalah pesan atau informasi sementara yang disimpan dalam sesi pengguna dan 
biasanya digunakan untuk menampilkan pesan sukses, gagal, atau peringatan setelah suatu tindakan dilakukan, seperti login atau pengiriman formulir.-->
<?php
// Fungsi untuk menetapkan flash data
function set_flashdata($Skey, $Svalue) {
    if (empty($Skey) && empty($Svalue)) {
        return false;
    }

    $_SESSION['flashdata'][$Skey] = $Svalue;
    return true;
}

// Fungsi untuk mendapatkan flash data
function get_flashdata($Skey = "") {
    if (empty($Skey) && isset($_SESSION['flashdata'][$Skey])) {
        $data = $_SESSION['flashdata'][$Skey];
        unset($_SESSION['flashdata'][$Skey]);
        return $data;
    } else {
        // Menampilkan pesan kesalahan jika flash data tidak ditemukan
        echo "<script>alert('Flash Message (' . $Skey . ') is not defined, sertakan argument saat memanggil fungsi get_flashdata.')</script>";
    }
    return false;
}

// Fungsi untuk menampilkan pesan
function pesan($key, $pesan) {
    if ($key == "info") {
        // Menetapkan flash data untuk pesan informasi
        set_flashdata("info", "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
        <strong>Info!</strong> " . $pesan . "
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    } elseif ($key == "success") {
        // Menetapkan flash data untuk pesan sukses
        set_flashdata("success", "<div class='alert alert-success alert-dismissible fade show' colesalert>
        <strong>Berhasil!</strong> " . $pesan . "
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    } elseif ($key == "danger") {
        // Menetapkan flash data untuk pesan gagal
        set_flashdata("danger", "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Gagal!</strong> " . $pesan . "
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    } else {
        // Menetapkan flash data untuk pesan peringatan
        set_flashdata("warning", "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Peringatan!</strong> " . $pesan . "
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    }
}
?>
