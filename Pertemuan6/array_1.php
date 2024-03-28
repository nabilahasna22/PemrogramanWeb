<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
    $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
    // Menampilkan list dosen tanpa menggunakan perulangan
    echo ("Tanpa Perulangan" . "<br><br>");
    echo $Listdosen[2] . "<br>"; //Menampilkan isi dari listDosen yang berada di indeks 2
    echo $Listdosen[0] . "<br>"; //Menampilkan isi dari listDosen yang berada di indeks 0
    echo $Listdosen[1] . "<br>"; //Menampilkan isi dari listDosen yang berada di indeks 1
    
    // Memberi spasi dan garis horizontal untuk pemisah 
    echo "<br><hr><br>";
    
    // Menampilkan list dosen dengan menggunakan perulangan foreach
    echo ("Menggunakan Perulangan" . "<br><br>");
    foreach ($Listdosen as $dosen) {
        echo $dosen . "<br>";
    };
    ?>
</body>
</html>