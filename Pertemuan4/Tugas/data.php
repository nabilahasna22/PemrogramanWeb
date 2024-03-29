<!DOCTYPE html>
<html>
<head>
    <title>IMPLEMENTASI LOOPS PADA MULTIDIMENSIONAL ARRAY</title>
</head>
<body>

<?php  

// Deklarasi array $gambar yang berisi informasi tentang setiap gambar
$gambar = array(
    "gambar1.jpg" => array(
        "nama" => "Jane Anderson",
        "alamat" => "Jl. Kenangan no.3, Makassar",
        "nomor_telepon" => "08827712345",
        "jurusan" => "Hukum"
    ),
    "gambar2.jpg" => array(
        "nama" => "Jessica Martins",
        "alamat" => "Jl. Violet no.45E, Bekasi",
        "nomor_telepon" => "08828812345",
        "jurusan" => "Psikologi"
    ),
    "gambar3.jpg" => array(
        "nama" => "Katharina Oliveira",
        "alamat" => "Jl. Cempaka Putih no. 32C, Jakarta",
        "nomor_telepon" => "08829912345",
        "jurusan" => "Bisnis Manajemen"
    )
);

// Judul untuk multidimensional array
echo "<h2>Data Mahasiswa Kwangya University</h2>";

// Loop foreach untuk mencetak informasi setiap gambar
foreach ($gambar as $gambar_file => $info) {
    // Menampilkan tag img dengan atribut src yang sesuai dengan file gambar
    echo '<img src="' . $gambar_file . '"><br>';
    // Menampilkan informasi nama, alamat, nomor telepon, dan jurusan dari setiap gambar
    echo "Nama       ".": " . $info['nama'] . "<br>";
    echo "Alamat     ".": " . $info['alamat'] . "<br>";
    echo "Nomor Telp ".": " . $info['nomor_telepon'] . "<br>";
    echo "Jurusan    ".": " . $info['jurusan'] . "<br>";
    echo "<br>";
    echo "<br>";
}

?>  

</body>
</html>
