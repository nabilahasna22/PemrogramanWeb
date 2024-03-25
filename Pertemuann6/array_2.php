<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <link rel="stylesheet" type="text/css"  href="styleArray2.css"> <!--akses dari kelas eksternal bernama styleArray2.css-->
</head>
<body>
    <table> <!--Pembuatan tabel-->
    <tr>
            <th>Nama Dosen</th>
            <th>Domisili</th>
            <th>Jenis Kelamin</th>
        </tr>
    <?php
        // Inisialisasi array $Dosen dengan informasi dosen
        $Dosen = [
            'nama' => 'Elok Nur Hamdana', // Menginisialisasi nama dosen
            'domisili' => 'Malang', // Menginisialisasi domisili dosen
            'jenis_kelamin' => 'Perempuan']; // Menginisialisi jenis kelamin dosen
        
        // Menampilkan baris tabel dengan informasi dari array $Dosen
        echo "<tr>";
        echo "<td>". "{$Dosen['nama']}". "</td>"; // Menampilkan nama dosen
        echo "<td>". "{$Dosen['domisili']}". "</td>"; // Menampilkan domisili dosen
        echo "<td>". "{$Dosen['jenis_kelamin']}". "</td>"; // Menampilkan jenis kelamin dosen
        echo "</tr>";
    ?>
    </table>
</body>
</html>