<html>
<head>
    <!-- Bagian kepala dokumen HTML -->
</head>
<body>
    <h2> Keranjang Belanja </h2>
    <!-- Judul halaman keranjang belanja -->
    <?php
        // Mengambil nilai jumlah novel dari cookie
        $beliNovel=$_COOKIE['beliNovel'];
        // Mengambil nilai jumlah buku dari cookie
        $beliBuku=$_COOKIE['beliBuku'];

        // Menampilkan jumlah novel yang dibeli
        echo "Jumlah Novel:".$beliNovel."<br>";
        // Menampilkan jumlah buku yang dibeli
        echo "Jumlah Buku :".$beliBuku;
    ?>
</body>
</html>
