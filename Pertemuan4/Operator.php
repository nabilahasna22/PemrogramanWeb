<?php
$a = 10; // Mendefinisikan variabel $a dengan nilai 10
$b = 5; // Mendefinisikan variabel $b dengan nilai 5

$hasilTambah = $a + $b; // Menambahkan nilai $a dan $b
$hasilKurang = $a - $b; // Mengurangkan nilai $a dan $b
$hasilKali   = $a * $b; // Mengalikan nilai $a dan $b
$hasilBagi   = $a / $b; // Membagi nilai $a dengan $b
$SisaBagi    = $a % $b; // Menghitung sisa bagi dari nilai $a dan $b
$pangkat     = $a ** $b; // Menghitung $a pangkat $b

echo "===Operasi Aritmatika===<br>"; // Menampilkan judul operasi aritmatika
echo "Hasil Penjumlahan: " . $hasilTambah . "<br>"; // Menampilkan hasil penjumlahan
echo "Hasil Pengurangan: " . $hasilKurang . "<br>"; // Menampilkan hasil pengurangan
echo "Hasil Perkalian: " . $hasilKali . "<br>"; // Menampilkan hasil perkalian
echo "Hasil Pembagian: " . $hasilBagi . "<br>"; // Menampilkan hasil pembagian
echo "Sisa Bagi: " . $SisaBagi . "<br>"; // Menampilkan sisa bagi
echo "Hasil Pangkat: " . $pangkat . "<br><br>"; // Menampilkan hasil pangkat

$hasilSama              = $a = $b; // Memeriksa apakah $a sama dengan $b dan menyimpan hasilnya ke $hasilSama
$hasilTidakSama         = $a != $b; // Memeriksa apakah $a tidak sama dengan $b dan menyimpan hasilnya ke $hasilTidakSama
$hasilLebihKecil        = $a < $b; // Memeriksa apakah $a lebih kecil dari $b dan menyimpan hasilnya ke $hasilLebihKecil
$hasilLebihBesar        = $a > $b; // Memeriksa apakah $a lebih besar dari $b dan menyimpan hasilnya ke $hasilLebihBesar
$hasilLebihKecilSama    = $a <= $b; // Memeriksa apakah $a lebih kecil atau sama dengan $b dan menyimpan hasilnya ke $hasilLebihKecilSama
$hasilLebihBesarSama    = $a >= $b; // Memeriksa apakah $a lebih besar atau sama dengan $b dan menyimpan hasilnya ke $hasilLebihBesarSama

echo "===Operasi Perbandingan=== <br>";// Menampilkan judul operasi perbandingan
echo "Apakah a sama dengan b? " . ($hasilSama ? "Ya" : "Tidak") . "<br>"; // Menampilkan hasil perbandingan apakah $a sama dengan $b
echo "Apakah a tidak sama dengan b? " . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>"; // Menampilkan hasil perbandingan apakah $a tidak sama dengan $b
echo "Apakah a lebih kecil dari b? " . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>"; // Menampilkan hasil perbandingan apakah $a lebih kecil dari $b
echo "Apakah a lebih besar dari b? " . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>"; // Menampilkan hasil perbandingan apakah $a lebih besar dari $b
echo "Apakah a lebih kecil atau sama dengan b? " . ($hasilLebihKecilSama ? "Ya" : "Tidak") . "<br>"; // Menampilkan hasil perbandingan apakah $a lebih kecil atau sama dengan $b
echo "Apakah a lebih besar atau sama dengan b? " . ($hasilLebihBesarSama ? "Ya" : "Tidak") . "<br><br>"; // Menampilkan hasil perbandingan apakah $a lebih besar atau sama dengan $b

$hasilAND   = $a && $b ; // Menyimpan hasil operasi logika AND dari $a dan $b ke dalam $hasilAND
$hasilOr    = $a || $b ; // Menyimpan hasil operasi logika OR dari $a dan $b ke dalam $hasilOr
$hasilNotA  = !$a  ; // Menyimpan hasil operasi logika NOT dari $a ke dalam $hasilNotA
$hasilNotB  = !$b  ; // Menyimpan hasil operasi logika NOT dari $b ke dalam $hasilNotB

echo "===Operasi Logika=== <br>"; // Menampilkan judul operasi logika
echo "Hasil dari operasi AND: " . ($hasilAND ? "True" : "False") . "<br>"; // Menampilkan hasil operasi logika AND
echo "Hasil dari operasi OR: " . ($hasilOr ? "True" : "False") . "<br>"; // Menampilkan hasil operasi logika OR
echo "Hasil dari operasi NOT pada a: " . ($hasilNotA ? "True" : "False") . "<br>"; // Menampilkan hasil operasi logika NOT pada $a
echo "Hasil dari operasi NOT pada b: " . ($hasilNotB ? "True" : "False") . "<br><br>"; // Menampilkan hasil operasi logika NOT pada $b

echo "===Operasi Penugasan=== <br>"; // Menampilkan judul operasi penugasan
$a += $b; // Menambahkan nilai $b ke $a(penugasan dengan penjumlahan) dan menyimpan hasilnya di $a
echo "Nilai a setelah ditambah dengan b: " . $a . "<br>"; // Menampilkan nilai $a setelah ditambah dengan $b
$a -= $b; // Mengurangkan nilai $b dari $a(penugasan dengan pengurangan) dan menyimpan hasilnya di $a
echo "Nilai a setelah dikurangi dengan b: " . $a . "<br>"; // Menampilkan nilai $a setelah dikurangi dengan $b
$a *= $b; // Mengalikan nilai $a dengan $b(penugasan dengan perkalian) dan menyimpan hasilnya di $a
echo "Nilai a setelah dikali dengan b: " . $a . "<br>"; // Menampilkan nilai $a setelah dikali dengan $b
$a /= $b; // Membagi nilai $a dengan $b(penugasan dengan pembagian) dan menyimpan hasilnya di $a
echo "Nilai a setelah dibagi dengan b: " . $a . "<br>"; // Menampilkan nilai $a setelah dibagi dengan $b
$a %= $b; // Menghitung sisa bagi nilai $a dengan $b(penugasan dengan sisa bagi) dan menyimpan hasilnya di $a
echo "Sisa bagi a setelah dibagi dengan b: " . $a . "<br><br>"; // Menampilkan sisa bagi $a setelah dibagi dengan $b

echo "===Operasi Identik=== <br>"; // Menampilkan judul operasi identik
$hasilIdentik = $a === $b; // Memeriksa apakah $a identik dengan $b dan menyimpan hasilnya ke $hasilIdentik
$hasilTidakIdentik = $a !== $b; // Memeriksa apakah $a tidak identik dengan $b dan menyimpan hasilnya ke $hasilTidakIdentik

echo "Apakah a identik dengan b? " . ($hasilIdentik ? "Ya" : "Tidak") . "<br>"; // Menampilkan hasil perbandingan apakah $a identik dengan $b
echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br><br>"; // Menampilkan hasil perbandingan apakah $a tidak identik dengan $b

echo "===Operasi Decrement=== <br>"; // Menampilkan judul operasi decrement
$jumlahKursiTotal = 45; // Mendefinisikan jumlah total kursi di restoran
$jumlahKursiTerisi = 28; // Mendefinisikan jumlah kursi yang sudah terisi di restoran
$jumlahKursiKosong = $jumlahKursiTotal - $jumlahKursiTerisi; // Menghitung jumlah kursi yang masih kosong di restoran
$persentaseKursiKosong = ($jumlahKursiKosong / $jumlahKursiTotal) * 100; // Menghitung persentase kursi yang masih kosong di restoran

echo "Jumlah kursi yang masih kosong di restoran: " . $jumlahKursiKosong . "<br>"; // Menampilkan jumlah kursi yang masih kosong di restoran
echo "Persentase kursi yang masih kosong di restoran: " . number_format($persentaseKursiKosong, 2) . "%"; // Menampilkan persentase kursi yang masih kosong di restoran dengan format dua angka di belakang koma

?>