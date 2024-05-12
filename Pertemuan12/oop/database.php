<?php
// Class Database adalah kelas untuk mengelola koneksi ke database MySQL.
class Database
{
    // Properti untuk menyimpan informasi koneksi ke database.
    private $host = "localhost"; // Nama host database.
    private $username = "root"; // Nama pengguna database.
    private $password = ""; // Kata sandi pengguna database.
    private $database = "web_dinamis"; // Nama database yang digunakan.
    public $conn; // Properti untuk menyimpan objek koneksi.

    // Konstruktor untuk membuat objek koneksi ke database saat objek Database dibuat.
    public function __construct()
    {
        // Membuat objek koneksi ke database menggunakan mysqli.
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Memeriksa apakah koneksi berhasil dibuat atau tidak.
        if ($this->conn->connect_error) {
            // Jika koneksi gagal, skrip berhenti dan menampilkan pesan error.
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
?>
