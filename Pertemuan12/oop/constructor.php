<?php
// Class Car adalah representasi dari mobil yang memiliki properti brand.
class Car
{
    private $brand; // Properti untuk menyimpan brand mobil.

    // Konstruktor untuk membuat objek mobil baru dengan brand yang ditentukan.
    public function __construct($brand)
    {
        echo "A new car is created.<br>"; // Pesan yang ditampilkan saat objek mobil dibuat.
        $this->brand = $brand; // Menginisialisasi properti brand dengan nilai yang diberikan.
    }

    // Metode untuk mengambil nilai properti brand.
    public function getBrand()
    {
        return $this->brand; // Mengembalikan nilai properti brand.
    }

    // Metode khusus yang dipanggil saat objek mobil dihancurkan.
    public function __destruct()
    {
        echo "The car is destroyed.<br>"; // Pesan yang ditampilkan saat objek mobil dihancurkan.
    }
}

$car = new Car("Toyota"); // Membuat objek mobil baru dengan brand "Toyota".

echo "Brand: " . $car->getBrand() . "<br>"; // Mendapatkan dan mencetak nilai brand mobil.
?>