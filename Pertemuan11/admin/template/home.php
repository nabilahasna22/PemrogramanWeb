<!--Kode inin bertujuan untuk membuat halaman dashboard yang menampilkan informasi tentang jumlah anggota dan jabatan dalam sebuah aplikasi, dengan menggunakan
data yang diambil dari database dan ditampilkan dalam bentuk card.-->

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <?php
            include "menu.php"; // Memasukkan file menu.php ke dalam dokumen

            $query_anggota = "SELECT count(id) as jml FROM anggota"; // Query untuk menghitung jumlah anggota
            $result_anggota = mysqli_query($koneksi, $query_anggota); // Menjalankan query anggota
            $row_anggota = mysqli_fetch_Assoc($result_anggota); // Mendapatkan hasil query anggota

            $query_jabatan = "SELECT count(id) as jml FROM jabatan"; // Query untuk menghitung jumlah jabatan
            $result_jabatan = mysqli_query($koneksi, $query_jabatan); // Menjalankan query jabatan
            $row_jabatan = mysqli_fetch_Assoc($result_jabatan); // Mendapatkan hasil query jabatan
            ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> <!-- Elemen utama untuk konten -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"> <!-- Elemen untuk header dashboard -->
                    <h1 class="h2">Dashboard</h1> <!-- Judul halaman dashboard -->
                </div> <!-- Akhir dari header dashboard -->
                <div class="row"> <!-- Awal dari baris dalam grid -->
                    <div class="col-sm-6"> <!-- Awal dari kolom setengah lebar -->
                        <div class="card"> <!-- Elemen card -->
                            <div class="card-body"> <!-- Elemen badan card -->
                                <h5 class="card-title">ANGGOTA</h5> <!-- Judul card -->
                                <p class="card-text">Total anggota sejumlah <?= $row_anggota['jml'] ?> orang.</p> <!-- Informasi jumlah anggota -->
                                <a href="index.php?page=anggota" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Kelola</a> <!-- Tombol untuk mengelola anggota -->
                            </div> <!-- Akhir dari badan card -->
                        </div> <!-- Akhir dari card -->
                    </div> <!-- Akhir dari kolom setengah lebar -->
                    <div class="col-sm-6"> <!-- Awal dari kolom setengah lebar -->
                        <div class="card"> <!-- Elemen card -->
                            <div class="card-body"> <!-- Elemen badan card -->
                                <h5 class="card-title">JABATAN</h5> <!-- Judul card -->
                                <p class="card-text">Total jabatan sejumlah <?= $row_jabatan['jml'] ?> orang.</p> <!-- Informasi jumlah jabatan -->
                                <a href="index.php?page=jabatan" class="btn btn-primary"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Kelola</a> <!-- Tombol untuk mengelola jabatan -->
                            </div> <!-- Akhir dari badan card -->
                        </div> <!-- Akhir dari card -->
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
