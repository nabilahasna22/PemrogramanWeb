<!--Kode di atas berfungsi untuk memproses data yang dikirimkan melalui metode POST. Pertama, kode memeriksa apakah metode permintaan adalah POST. 
Jika ya, maka kode mengambil nilai buah, warna, dan jenis kelamin yang dipilih dari formulir. Kemudian, kode menampilkan informasi yang dipilih oleh 
pengguna, seperti buah yang dipilih, warna favorit (jika ada yang dipilih), dan jenis kelamin yang dipilih. Jika pengguna tidak memilih warna favorit, 
akan ditampilkan pesan bahwa warna tidak dipilih.-->

<?php
// Memeriksa apakah metode permintaan adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai buah yang dipilih dari formulir
    $selectedBuah = $_POST['buah'];

    // Memeriksa apakah pilihan warna dipilih oleh pengguna, jika tidak, menginisialisasi array kosong
    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }

    // Mengambil nilai jenis kelamin yang dipilih dari formulir
    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    // Menampilkan buah yang dipilih oleh pengguna
    echo "Anda memilih buah: " . $selectedBuah . "<br>";

    // Memeriksa apakah pengguna memilih warna favorit, jika ya, menampilkan pilihan warna, jika tidak, menampilkan pesan bahwa warna tidak dipilih
    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }

    // Menampilkan jenis kelamin yang dipilih oleh pengguna
    echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
}
?>
