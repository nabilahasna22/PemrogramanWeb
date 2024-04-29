<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data Anggota</title>
        <!-- Menyisipkan Bootstrap CSS dari CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <?php
        // Mengimpor koneksi ke database
        include('koneksi.php');
        // Mengambil ID anggota yang akan diubah
        $id = $_GET['id'];
        // Query untuk mengambil data anggota berdasarkan ID
        $query = "SELECT * FROM anggota WHERE id = $id";
        // Eksekusi query
        $result = mysqli_query($koneksi, $query);
        // Mengambil baris hasil query sebagai asosiasi array
        $row = mysqli_fetch_assoc($result);
        // Menutup koneksi ke database
        mysqli_close($koneksi);
        ?>
        <div class="container mt-4">
            <h2>Edit Data Anggota</h2>
            <!-- Form untuk mengubah data anggota -->
            <form action="proses.php?aksi=ubah" method="post">
                <!-- Input tersembunyi untuk menyimpan ID anggota -->
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <!-- Input untuk nama anggota -->
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama'];?>" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <div class="form-check">
                        <!-- Input radio untuk memilih jenis kelamin -->
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" <?php if($row['jenis_kelamin'] === 'L') echo 'checked'; ?> required>
                        <label for="laki" class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <!-- Input radio untuk memilih jenis kelamin -->
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="perempuan" <?php if($row['jenis_kelamin'] === 'L') echo 'checked'; ?> required>
                        <label for="perempuan" class="form-check-label">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <!-- Input untuk alamat anggota -->
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telp:</label>
                    <!-- Input untuk nomor telepon anggota -->
                    <input type="text" class="form-control" name="no_telp" id="no_telp" value="<?php echo $row['no_telp']; ?>" required>
                </div>
                <!-- Tombol untuk menyimpan perubahan data anggota -->
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
            <!-- Tombol untuk kembali ke halaman utama -->
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>

        <!-- Menyisipkan jQuery Slim dan Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <!-- Menyisipkan Bootstrap JS dari CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
