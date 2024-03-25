<?php
// Teks lorem ipsum yang akan diolah
$loremipsum = "lorem ipsum dolor sit amet consectetur asdfghjkl dubadu wari wari dubadu wari wari 
dubadu wari wari dubadu wari wari dubadu wari wari dubadu wari wari dubadu wari wari dubadu wari wari 
dubadu wari wari dubadu wari wari dubadu wari wari dubadu wari wari dubadu wari wari dubadu wari wari
dubadu wari wari dubadu wari wari dubadu wari wari dubadu wari wari.";

// Menampilkan teks lorem ipsum dalam sebuah paragraf
echo "<p>{$loremipsum}</p>";

// Menampilkan panjang karakter dari teks lorem ipsum
echo "Panjang karakter: " . strlen($loremipsum) . "<br>";

// Menampilkan jumlah kata dalam teks lorem ipsum
echo "Panjang kata: " . str_word_count($loremipsum) . "<br>";

// Menampilkan teks lorem ipsum dalam huruf kapital (uppercase)
echo "<p>" . strtoupper($loremipsum) . "</p>";

// Menampilkan teks lorem ipsum dalam huruf kecil (lowercase)
echo "<p>" . strtolower($loremipsum) . "</p>";
?>
