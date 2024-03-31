<!--Kode ini merupakan formulir HTML sederhana yang memungkinkan pengguna memasukkan nama dan email. Formulir ini akan dikirimkan 
ke halaman proses_form.php saat tombol "Submit" ditekan. Pada bagian input nama dan email, atribut required digunakan untuk memastikan 
bahwa kedua kolom harus diisi sebelum formulir dapat dikirimkan.-->
<!DOCTYPE html> 
<html>
    <head>
        <title>Form Input PHP</title> 
    </head>
<body>
    <h2>Form Input PHP</h2> 
    <form method="post" action="proses_form.php"> <!-- Formulir untuk mengirim data ke proses_form.php menggunakan metode POST -->
        <label for="nama">Nama:</label> <!-- Label untuk input nama -->
        <input type="text" name="nama" id="nama" required><br><br> <!-- Input untuk memasukkan nama, atribut "required" memastikan input tidak boleh kosong -->

        <label for="email">Email:</label> <!-- Label untuk input email -->
        <input types="email" name="email" id="email" required><br><br> <!-- Input untuk memasukkan email, atribut "required" memastikan input tidak boleh kosong -->

        <input type="submit" name="submit" value="Submit"> <!-- Tombol submit untuk mengirimkan data formulir -->
    </form>
</body>
</html>
