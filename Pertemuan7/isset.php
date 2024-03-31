<!--Kode Pertama, berfungsi memeriksa apakah variabel $umur terdefinisi dan apakah nilainya 
lebih besar atau sama dengan 18. Jika kondisi terpenuhi, akan mencetak "Anda sudah dewasa.", 
jika tidak, akan mencetak "Anda belum dewasa atau variabel 'umur' tidak ditemukan". Kode 
selanjutnya, berfungsi mendefinisikan array $data dengan dua elemen, yaitu "nama" dan "usia". 
Selanjutnya, kode memeriksa apakah kunci "nama" ada dalam array $data. Jika iya, akan mencetak 
nama yang ada di dalam array, jika tidak, akan mencetak "Variabel 'nama' tidak ditemukan dalam array."-->
<?php
// Deklarasi variabel $umur
$umur;
// Memeriksa apakah variabel $umur terdefinisi dan bernilai lebih besar atau sama dengan 18
if(isset($umur) && $umur >= 18){
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan";
}

// Untuk memberi enter antar baris pertama dengan baris kedua
echo "<br>";

// Mendefinisikan array $data
$data = array("nama" => "Jane", "usia" => 25);

// Memeriksa apakah kunci "nama" ada dalam array $data
if (isset($data["nama"])) {
    echo "nama: " . $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}
?>
