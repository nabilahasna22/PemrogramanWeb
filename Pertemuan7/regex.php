<?php
// Judul untuk pola regex pertama
echo "<h2>Pola untuk Huruf Kecil</h2>";
// Mendefinisikan pola regex untuk mencocokkan huruf kecil.
$pattern1 = '/[a-z]/'; 
// Teks yang akan diuji.
$text1 = 'This is a Sample Text.';
// Menguji apakah pola regex cocok dengan teks yang diberikan.
if (preg_match($pattern1, $text1)){
    // Jika cocok, maka tampilkan pesan.
    echo "Huruf kecil ditemukan!";
} else {
    // Jika tidak cocok, tampilkan pesan alternatif.
    echo "Tidak ada huruf kecil";
}

echo "<br>"; // Menambahkan baris kosong untuk tata letak yang lebih baik.

// Judul untuk pola regex kedua
echo "<h2>Pola untuk Angka</h2>";
// Mendefinisikan pola regex untuk mencocokkan angka.
$pattern2 = '/[0-9]+/';
// Teks yang akan diuji.
$text2 = 'There are 123 apples.';
// Menguji apakah pola regex cocok dengan teks yang diberikan.
if (preg_match($pattern2, $text2, $matches)){
    // Jika cocok, maka tampilkan pesan bersama dengan hasil yang cocok.
    echo "Cocokkan: " . $matches[0];
} else {
    // Jika tidak cocok, tampilkan pesan alternatif.
    echo "Tidak ada yang cocok!";
}

echo "<br>"; // Menambahkan baris kosong untuk tata letak yang lebih baik.

// Judul untuk pola regex ketiga
echo "<h2>Pola untuk Penggantian Kata 'apple'</h2>";
// Mendefinisikan pola regex untuk mencocokkan kata "apple".
$pattern = '/apple/';
// Kata pengganti yang akan menggantikan setiap kemunculan "apple" dalam teks.
$replacement = 'banana';
// Teks awal yang akan diolah.
$text = 'I like apple pie.';
// Mengganti setiap kemunculan "apple" dengan "banana" dalam teks.
$new_text = preg_replace($pattern, $replacement, $text);
// Menampilkan teks baru setelah dilakukan penggantian.
echo $new_text; // Output 'I like banana pie'

echo "<br>"; // Menambahkan baris kosong untuk tata letak yang lebih baik.

// Judul untuk pola regex ketiga
echo "<h2>Pola untuk Mencocokkan Kata</h2>";
// Mendefinisikan pola regex untuk mencocokkan kata dengan nol atau lebih 'o' di antara 'g' dan 'd'.
$pattern = '/go{2,3}d/';
// Teks yang akan diuji.
$text = 'god is good.';
// Menguji apakah pola regex cocok dengan teks yang diberikan.
if(preg_match($pattern, $text, $matches)){
    // Jika cocok, tampilkan hasil yang cocok.
    echo "Cocokkan: ".$matches[0];
}else{
    // Jika tidak cocok, tampilkan pesan alternatif.
    echo "Tidak ada yang cocok!";
}
?>
