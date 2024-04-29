<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Anggota</title>
        <!-- Memuat stylesheet eksternal -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>Tambah Data Anggota</h2>

            <!-- Form untuk menambahkan data anggota -->
            <form action="proses.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <!-- Input untuk nama anggota -->
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis Kelamin</label>
                    <div class="form-check">
                        <!-- Input radio untuk memilih jenis kelamin -->
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" required> 
                        <label class="form-check-label" for="laki">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <!-- Input radio untuk memilih jenis kelamin -->
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="Perempuan" required>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <!-- Input untuk alamat anggota -->
                    <input type="text" class="form-control" name="alamat" id="alamat" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telp:</label>
                    <!-- Input untuk nomor telepon anggota -->
                    <input type="text" class="form-control" name="no_telp" required>
                </div>
                <!-- Tombol untuk menyimpan data anggota -->
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
            <!-- Tombol kembali ke halaman utama -->
            <a href="index.php" class="btn btn-secondary mt-2">Kembali</a>
        </div>
    </body>
</html>
