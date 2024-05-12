<?php
require_once 'Crud.php'; // Mengimpor file Crud.php yang berisi kelas Crud.

$crud = new Crud(); // Membuat objek Crud untuk melakukan operasi CRUD.

// Memeriksa jika metode permintaan adalah POST (saat formulir tambah dikirim).
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jabatan = $_POST['jabatan']; // Mengambil nilai jabatan dari formulir.
    $keterangan = $_POST['keterangan']; // Mengambil nilai keterangan dari formulir.
    
    // Memanggil metode create dari objek Crud untuk menambahkan data baru.
    $crud->create($jabatan, $keterangan);
}

// Memeriksa jika parameter action dan nilainya adalah 'delete' (saat tombol hapus diklik).
if (isset($_GET['action']) && $_GET['action'] === 'delete') {
    $id = $_GET['id']; // Mengambil ID jabatan dari parameter URL.
    // Memanggil metode delete dari objek Crud untuk menghapus data berdasarkan ID.
    $crud->delete($id);
}

$tampil = $crud->read(); // Membaca semua data jabatan dari database.

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Jabatan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <!-- Tombol untuk memunculkan modal tambah -->
        <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#tambahModal">Tambah</button>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jabatan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Looping untuk menampilkan data jabatan dalam tabel
                foreach ($tampil as $show) {
                    echo "<tr>";
                    echo "<td>" . $show['id'] . "</td>";
                    echo "<td>" . $show['jabatan'] . "</td>";
                    echo "<td>" . $show['keterangan'] . "</td>";
                    echo "<td>";
                    // Tombol edit yang mengarahkan ke halaman edit.php dengan ID jabatan sebagai parameter
                    echo "<a href='edit.php?id=" . $show['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                    // Tombol hapus yang mengarahkan ke halaman ini dengan parameter action=delete dan ID jabatan
                    echo "<a href='index.php?action=delete&id=" . $show['id'] . "' class='btn btn-danger btn-sm'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Modal untuk menambah data jabatan -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role=document>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jabatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulir untuk menambahkan jabatan baru -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Jabatan:</label>
                            <input type="text" name="jabatan" id="jabatan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Keterangan:</label>
                            <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <!-- Tombol untuk menambahkan data -->
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
