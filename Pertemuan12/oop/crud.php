<?php
include 'database.php'; // Mengimpor file database.php yang berisi koneksi ke database.

// Kelas Crud adalah kelas untuk melakukan operasi CRUD (Create, Read, Update, Delete) pada tabel jabatan di database.
class Crud
{
    private $db; // Properti untuk menyimpan objek koneksi database.

    // Konstruktor untuk membuat objek koneksi database saat objek Crud dibuat.
    public function __construct()
    {
        $this->db = new Database(); // Membuat objek koneksi database.
    }

    // Metode Create untuk menambahkan data baru ke tabel jabatan.
    public function create($jabatan, $keterangan)
    {
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')"; // Query SQL untuk menambahkan data.
        $result = $this->db->conn->query($query); // Menjalankan query SQL.
        return $result; // Mengembalikan hasil operasi (true jika berhasil, false jika gagal).
    }

    // Metode Read untuk mengambil semua data dari tabel jabatan.
    public function read()
    {
        $query = "SELECT * FROM jabatan"; // Query SQL untuk mengambil semua data.
        $result = $this->db->conn->query($query); // Menjalankan query SQL.

        if ($result === false) { // Jika query gagal dieksekusi.
            die("Query failed: " . $this->db->conn->error); // Membuat skrip berhenti dan menampilkan pesan error.
        }

        $data = []; // Membuat array kosong untuk menyimpan data.
        if ($result->num_rows > 0) { // Jika ada satu atau lebih baris hasil dari query.
            while ($row = $result->fetch_assoc()) { // Melakukan iterasi untuk setiap baris hasil query.
                $data[] = $row; // Menambahkan baris hasil ke dalam array data.
            }
        }

        return $data; // Mengembalikan array data.
    }

    // Metode Read By Id untuk mengambil data jabatan berdasarkan ID.
    public function readById($id)
    {
        $query = "SELECT * FROM jabatan WHERE id = $id"; // Query SQL untuk mengambil data berdasarkan ID.
        $result = $this->db->conn->query($query); // Menjalankan query SQL.

        if ($result->num_rows == 1) { // Jika hanya satu baris hasil yang ditemukan.
            return $result->fetch_assoc(); // Mengembalikan data sebagai array asosiatif.
        } else { // Jika tidak ada atau lebih dari satu baris hasil yang ditemukan.
            return null; // Mengembalikan nilai null.
        }
    }

    // Metode Update untuk memperbarui data jabatan berdasarkan ID.
    public function update($id, $jabatan, $keterangan)
    {
        $query = "UPDATE jabatan SET jabatan ='$jabatan', keterangan='$keterangan' WHERE id = $id"; // Query SQL untuk memperbarui data.
        $result = $this->db->conn->query($query); // Menjalankan query SQL.
        return $result; // Mengembalikan hasil operasi (true jika berhasil, false jika gagal).
    }

    // Metode Delete untuk menghapus data jabatan berdasarkan ID.
    public function delete($id)
    {
        $query = "DELETE FROM jabatan WHERE id = $id"; // Query SQL untuk menghapus data.
        $result = $this->db->conn->query($query); // Menjalankan query SQL.
        return $result; // Mengembalikan hasil operasi (true jika berhasil, false jika gagal).
    }
}
?>
