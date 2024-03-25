<?php
$nilaiNumerik = 92; // Mendefinisikan nilai numerik

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A"; // Menampilkan nilai huruf A jika nilai numerik berada di antara 90 dan 100
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B"; // Menampilkan nilai huruf B jika nilai numerik berada di antara 80 dan 89
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C"; // Menampilkan nilai huruf C jika nilai numerik berada di antara 70 dan 79
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D"; // Menampilkan nilai huruf D jika nilai numerik kurang dari 70
}

echo "<br>"; // Menampilkan baris baru

$jarakSaatIni      = 0; // Inisialisasi jarak saat ini
$jarakTarget       = 500; // Menentukan jarak target
$peningkatanHarian = 30; // Menentukan peningkatan harian
$hari              = 0; // Inisialisasi jumlah hari

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian; // Menambahkan peningkatan harian ke jarak saat ini
    $hari++; // Menambah jumlah hari
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer."; // Menampilkan hasil

echo "<br>";
echo "<br>";

$jumlahLahan         = 10; // Jumlah lahan yang dimiliki
$tanamanPerlahan     = 5; // Jumlah tanaman per lahan
$buahPerTanaman      = 10; // Jumlah buah per tanaman
$jumlahBuah          = 0; // Inisialisasi jumlah buah

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman); // Menambah jumlah buah dengan hasil perkalian tanaman per lahan dan buah per tanaman
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah"; // Menampilkan jumlah buah yang akan dipanen

echo "<br>";
echo "<br>";

$skorUjian = [85, 92, 78, 96, 88]; // Array skor ujian
$totalSkor = 0; // Inisialisasi total skor

foreach ($skorUjian as $skor) {
    $totalSkor += $skor; // Menambahkan setiap skor ke total skor
}

echo "Total skor ujian adalah : $totalSkor "; // Menampilkan total skor ujian

echo "<br>"; 
echo "<br>"; 

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96]; // Array nilai siswa

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 70) {
        echo "Nilai: $nilai (Tidak lulus) <br> "; // Menampilkan nilai siswa yang tidak lulus
        continue; // Melanjutkan ke iterasi berikutnya jika nilai siswa kurang dari 70
    }
    echo "Nilai : $nilai (lulus)<br> "; // Menampilkan nilai siswa yang lulus
}

echo "<br>"; 
echo "<br>"; 

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96]; // Array nilai siswa
sort($nilaiSiswa); // Mengurutkan nilai siswa secara ascending
$totalNilai = 0; // Inisialisasi total nilai
$count = count($nilaiSiswa); // Menghitung jumlah nilai siswa

for ($i = 2; $i < $count - 2; $i++) {
    $totalNilai += $nilaiSiswa[$i]; // Menambahkan nilai siswa ke total nilai, mengabaikan dua nilai tertinggi dan dua nilai terendah
}

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai"; // Menampilkan total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah

echo "<br>"; 
echo "<br>"; 

$hargaProduk = 120000; // Harga produk
$diskon = 0; // Inisialisasi diskon

if ($hargaProduk > 100000) {
    $diskon = 0.2; // Jika harga produk lebih dari 100000, diskon 20%
}

$totalHarga = $hargaProduk - ($hargaProduk * $diskon); // Menghitung total harga setelah diskon
echo "Harga yang harus dibayar setelah diskon adalah: Rp " . number_format($totalHarga, 0, ',', '.'); // Menampilkan harga setelah diskon

echo "<br>"; 
echo "<br>"; 

$poin = 700; // Total poin pemain
$totalSkor = "Total skor pemain adalah: $poin"; // Menampilkan total skor pemain
$hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK"; // Menentukan apakah pemain mendapatkan hadiah tambahan
echo $totalSkor . PHP_EOL; // Menampilkan total skor pemain
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan"; // Menampilkan apakah pemain mendapatkan hadiah tambahan

?>