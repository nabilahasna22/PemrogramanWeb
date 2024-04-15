<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/pemesananStyle.css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo-wo.png">
    <title>Form Pemesanan Wedding Organizer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>
<div class="container">
    <!-- Form untuk memasukkan input -->
    <form method="post" action="proses.php" enctype="multipart/form-data" onsubmit="saveFormData()">
        <img src="img/logo-wo.png" height="100px" width="150px">
        <h2>Form Pemesanan Hasna Wedding Organizer</h2>
        <p>Silakan isi formulir di bawah ini untuk memesan layanan Wedding Organizer.<br>
            *Pastikan Anda sudah melakukan konsultasi dengan admin via whatsapp</p><br><br>
        <label for="nama">Nama Lengkap*</label><br>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="email">Email*</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="tanggal">Tanggal Acara*</label>
        <input type="text" id="tanggal" name="tanggal" required><br>

        <label for="telepon">Nomor Telepon*</label><br>
        <input type="text" name="telepon" id="telepon" required><br><br>

        <label for="paket">Paket Wedding*</label><br>
        <select name="paket" id="paket" required>
            <option value="Paket Silver">Paket Silver</option>
            <option value="Paket Gold">Paket Gold</option>
            <option value="Paket Platinum">Paket Platinum</option>
            <option value="Paket Intimate">Paket Intimate</option>
        </select><br><br>

        <label for="pembayaran">Metode Pembayaran*</label><br>
        <select name="pembayaran" id="pembayaran" required>
            <option value="BRI">BRI</option>
            <option value="BNI">BNI</option>
            <option value="BSI">BSI</option>
            <option value="MANDIRI">MANDIRI</option>
        </select><br><br>

        <label for="alamat">Jumlah tamu undangan*</label><br>
        <input type="text" name="alamat" id="alamat" rows="4" cols="30" required><br><br>

        <label for="alamat">Alamat*</label><br>
        <textarea name="alamat" id="alamat"required></textarea><br><br>

        <label for="nik">Nomor Induk Kependudukan (NIK)*</label><br>
        <input type="text" name="nik" id="nik" required><br><br>

        <label for="pesan">Pesan Tambahan(opsional)</label><br>
        <textarea name="pesan" id="pesan" rows="4" cols="30"></textarea><br><br>
        
        
        <label for="foto_ktp">Upload Foto KTP*</label><br>
        <input type="file" name="foto_ktp" id="foto_ktp" accept="image/*" required><br><br>
        
        
        <label for="foto_konsultasi">Upload Bukti Konsultasi*</label><br>
        <input type="file" name="foto_konsultasi" id="foto_konsultasi" accept="image/*" required><br><br>
        
        
        <label for="foto_struk">Upload Bukti Pembayaran DP*</label><br>
        <input type="file" name="foto_struk" id="foto_struk" accept="image/*" required><br><br>
        

        <input type="submit" name="submit" value="Submit">

        <p>Belum memiliki akun? <a href="signup.php">Daftar disini</a></p>
    </form>
</div>
    <!-- Include Flatpickr library -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
    // Inisialisasi Flatpickr pada input tanggal
    flatpickr("#tanggal", {
        dateFormat: "Y-m-d", // Format tanggal (YYYY-MM-DD)
        minDate: "today" // Batasi pilihan tanggal tidak boleh sebelum tanggal hari ini
    });

    // Fungsi untuk menyimpan data formulir ke dalam cookie
    function saveFormData() {
        var formData = {
            nama: document.getElementById('nama').value,
            email: document.getElementById('email').value,
            tanggal: document.getElementById('tanggal').value,
            telepon: document.getElementById('telepon').value,
            paket: document.getElementById('paket').value,
            pesan: document.getElementById('pesan').value,
            jumlah_tamu: document.getElementById('jumlah_tamu').value,
            nik: document.getElementById('nik').value,
            alamat: document.getElementById('alamat').value,
            foto_ktp: document.getElementById('foto_ktp').value, // Tambahkan koma setelah setiap baris
            foto_struk: document.getElementById('foto_struk').value,
            foto_konsultasi: document.getElementById('foto_konsultasi').value
        };

        // Simpan data formulir ke dalam cookie dengan nama 'formData'
        document.cookie = "formData=" + JSON.stringify(formData);

        // Lanjutkan pengiriman formulir
        return true;
    }
    </script>
</body>
</html>
