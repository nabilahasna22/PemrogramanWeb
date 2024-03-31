<!--kode ini berfungsi untuk menguji apakah suatu array atau variabel telah didefinisikan dan apakah mereka kosong atau tidak. 
Jika array atau variabel kosong atau tidak didefinisikan, maka akan dicetak pesan yang sesuai. Jika array atau variabel 
terdefinisi dan tidak kosong, maka akan dicetak pesan yang berbeda.-->

<?php
$myArray = array(); // Mendefinisikan variabel $myArray sebagai array kosong

if(empty($myArray)){ // Memeriksa apakah $myArray kosong
    echo "Array tidak terdefinisi atau kosong."; // Jika kosong, cetak pesan ini
} else{
    echo "Array terdefinisi dan tidak kosong."; // Jika tidak kosong, cetak pesan ini
}
echo "<br>"; // Menambahkan baris baru

if(empty($nonExistantVar)){ // Memeriksa apakah variabel $nonExistantVar tidak terdefinisi atau kosong
    echo "Variabel tidak terdefinisi atau kosong."; // Jika tidak terdefinisi atau kosong, cetak pesan ini
} else{
    echo "Variabel terdefinisi dan tidak kosong."; // Jika terdefinisi dan tidak kosong, cetak pesan ini
}
?>