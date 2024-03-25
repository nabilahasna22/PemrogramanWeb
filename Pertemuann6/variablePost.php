<html>
<body>
    
<!--Formulir yang digunakan untuk mengirim data pakai method POST menuju halaman PHP sendiri -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //collect value of input field
    $name = $_POST['fname']; // Mengambil sebuah nilai yang dikirim (POST)
    if (empty($name)) {
        echo "Name is empty"; //jika nama tidak diisi atau kosong, maka akan menampilkan pesan ini
    } else {
        echo $name;
    }
}
?>
</body>
</html>