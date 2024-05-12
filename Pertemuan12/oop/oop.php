<!--    
Kode ini merupakan penerapan dari oop, yang mana dalam satu class terdapat beberapa atribut dan method yang merepresentasikan karakteristik dari suatu objek tertentu. Bagian 
pertama kode mendefinisikan kelas Car yang memiliki properti $brand untuk merek mobil dan method startEngine() untuk menyalakan mesin mobil. Bagian kedua membuat dua objek mobil
baru menggunakan kelas Car, sementara bagian ketiga menetapkan merek mobil untuk masing-masing objek. Bagian keempat memanggil method startEngine() untuk menyalakan mesin mobil car1, 
dan bagian terakhir mencetak merek mobil car2. Keseluruhan, kode ini memberikan pemahaman tentang pembuatan kelas dan objek dalam PHP serta penggunaannya untuk menetapkan properti 
dan memanggil metode pada objek tersebut.
-->

<?php
// Mendefinisikan kelas Car
class Car {
    // Properti publik $brand untuk merepresentasikan merek mobil
    public $brand;
    
    // Method publik startEngine() untuk menyalakan mesin mobil
    public function startEngine() {
        echo "Engine started!"; // Pesan yang dicetak saat mesin mobil dinyalakan
    }
}

// Membuat instance pertama dari kelas Car dan menetapkan merek mobil Toyota
$car1 = new Car();
$car1->brand = "Toyota";

// Membuat instance kedua dari kelas Car dan menetapkan merek mobil Honda
$car2 = new Car();
$car2->brand = "Honda";

// Memanggil method startEngine() dari objek $car1 untuk menyalakan mesin mobil Toyota
$car1->startEngine();

// Mencetak merek mobil dari objek $car2 (Honda)
echo $car2->brand;

