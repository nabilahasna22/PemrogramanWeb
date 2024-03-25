<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96]; // Array nilai siswa
$nilaiLulus = []; // Array untuk menyimpan nilai siswa yang lulus

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai; // Menambahkan nilai siswa yang lulus ke dalam array $nilaiLulus
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(',', $nilaiLulus); // Menampilkan daftar nilai siswa yang lulus dalam bentuk string yang dipisahkan koma

echo "<br>"; 
echo "<br>"; 
echo "<br>"; 

$daftarKaryawan = [ // Array daftar karyawan beserta pengalaman kerja
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = []; // Array untuk menyimpan nama karyawan dengan pengalaman lebih dari lima tahun

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0]; // Menambahkan nama karyawan ke array jika pengalaman kerjanya lebih dari lima tahun
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun); // Menampilkan daftar karyawan dengan pengalaman kerja lebih dari lima tahun

echo "<br>";
echo "<br>";
echo "<br>";

// Array untuk menyimpan daftar nilai mahasiswa dalam beberapa mata kuliah
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 88],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika'; // Mata kuliah yang akan ditampilkan
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>"; // Menampilkan judul mata kuliah

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama : {$nilai[0]}, Nilai: {$nilai[1]}<br>"; // Menampilkan nama dan nilai mahasiswa dalam mata kuliah tertentu
}

echo "<br>"; 
echo "<br>"; 
echo "<br>"; 

$daftarNilaiSiswa = [ // Array daftar nilai siswa beserta nama dan nilai
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];
$totalNilai = 0; // Inisialisasi total nilai

foreach ($daftarNilaiSiswa as $siswa) {
    $totalNilai += $siswa[1]; // Menghitung total nilai dari seluruh siswa
}

$rataRataKelas = $totalNilai / count($daftarNilaiSiswa); // Menghitung rata-rata kelas
echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata kelas:<br>";

foreach ($daftarNilaiSiswa as $siswa) {
    if ($siswa[1] > $rataRataKelas) {
        echo "Nama : " . $siswa[0] . ", Nilai : " . $siswa[1] . "<br>"; // Menampilkan nama siswa dan nilai yang mencapai nilai di atas rata-rata kelas
    }
}

?>