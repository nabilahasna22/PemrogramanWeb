<!--Kode ini formulir sederhana yang meminta pengguna untuk memasukkan nama. Setelah formulir diisi 
dan tombol "Submit" ditekan, data akan divalidasi di sisi server. Jika nama tidak kosong, pesan "Data 
berhasil disimpan" akan ditampilkan di atas formulir. Jika nama kosong, pesan kesalahan "Nama harus diisi" 
akan ditampilkan di samping input nama.-->
<!DOCTYPE html> 
<html>
    <head>
        <title>Form Input PHP</title>
    </head>
    <body>
        <h2>Form Input PHP</h2>
        <?php
        // Inisialisasi variabel
        $namaErr = ""; // Variabel untuk menyimpan pesan kesalahan nama
        $nama = ""; // Variabel untuk menyimpan nilai nama
        
        // Cek apakah form sudah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validasi nama (pastikan nama tidak kosong)
            if (empty($_POST["nama"])) {
                $namaErr = "Nama harus diisi:"; // Jika kosong, set pesan kesalahan
            } else {
                $nama = $_POST["nama"]; // Jika tidak kosong, simpan nilai nama
                echo "Data berhasil disimpan"; // Tampilkan pesan bahwa data berhasil disimpan
            }
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <!-- Formulir dengan metode POST yang mengirimkan data ke halaman itu sendiri -->
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>"> 
            <span class="error"><?php echo $namaErr; ?></span><br><br> <!-- Span untuk menampilkan pesan kesalahan nama -->

            <input type="submit" name="submit" value="Submit"> <!-- Tombol submit untuk mengirimkan formulir -->
        </form>
    </body>
</html>
