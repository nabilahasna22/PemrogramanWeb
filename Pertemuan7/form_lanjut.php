<!--Kode ini merupakan formulir sederhana yang meminta pengguna untuk memilih buah favorit, 
warna favorit, dan jenis kelamin. Setelah pengguna mengisi formulir dan menekan tombol "Submit", 
data akan dikirimkan ke halaman proses_lanjut.php untuk diproses lebih lanjut.-->
<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form dengan PHP</title>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <!-- Form untuk pengguna memilih buah, warna favorit, dan jenis kelamin -->
        <form method="POST" action="proses_lanjut.php">
            <label for="buah">Pilih Buah: </label>
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="pisang">Pisang</option>
                <option value="mangga">Mangga</option>
                <option value="jeruk">Jeruk</option>
            </select>

            <br>

            <label>Pilih Warna Favorit:</label><br>
            <!-- Kotak centang untuk memilih warna favorit -->
            <input type="checkbox" name="warna[]" value="merah"> Merah<br>
            <input type="checkbox" name="warna[]" value="biru"> Biru<br>
            <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

            <br>

            <label>Pilih Jenis Kelamin:</label><br>
            <!-- Tombol radio untuk memilih jenis kelamin -->
            <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
            <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

            <br>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>
