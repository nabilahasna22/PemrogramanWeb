<!DOCTYPE html>
<html>
    <head>
        <title>Data Anggota</title>
        <!-- Menyisipkan Bootstrap CSS dari CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-4">
            <h2>Data Anggota</h2>
            <!-- Tombol untuk menambah data anggota -->
            <a href="create.php" class="btn btn-success mt-2">Tambah Data</a>
            <br><br>
            <?php
            // Mengimpor koneksi ke database
            include('koneksi.php');
            // Query untuk mengambil data anggota dari database
            $query = "SELECT * FROM anggota order by id desc";
            // Eksekusi query
            $result = mysqli_query($koneksi, $query);
            ?>
            <!-- Tabel untuk menampilkan data anggota -->
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No. Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Variabel untuk nomor urut
                    $no = 1;
                    // Mengambil setiap baris hasil query dan menampilkannya
                    while($row = mysqli_fetch_assoc($result)){
                        // Mengonversi kode jenis kelamin menjadi teks
                        $kelamin = ($row["jenis_kelamin"] == 'L')?'Laki-laki':'Perempuan';
                        ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$row["nama"]?></td>
                            <td><?=$kelamin?></td>
                            <td><?=$row["alamat"]?></td>
                            <td><?=$row["no_telp"]?></td>
                            <td>
                                <!-- Tombol untuk mengedit data anggota -->
                                <a class="btn btn-primary" href="edit.php?id=<?=$row["id"]?>">Edit</a>
                                <!-- Tombol untuk menghapus data anggota -->
                                <a class="btn btn-danger" href="#" data-toggle='modal' data-target='#hapusModal<?=$row["id"]?>'>Hapus</a>
                            </td>
                        </tr>
                        <!-- Modal untuk konfirmasi penghapusan data anggota -->
                        <div class='modal fade' id='hapusModal<?= $row["id"] ?>' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-tittle" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?= "Apakah Anda yakin ingin menghapus data dengan nama " . $row["nama"] . "?"?>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Tombol untuk menghapus data anggota -->
                                        <a class="btn btn-danger" href="proses.php?aksi=hapus&id=<?= $row["id"] ?>">Hapus</a>
                                        <!-- Tombol untuk menutup modal -->
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- Menyisipkan jQuery Slim dan Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdlivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <!-- Menyisipkan Bootstrap JS dari CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
