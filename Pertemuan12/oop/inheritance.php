<!--
Kode ini merupakan penerapan parent class dan child class, yang memungkinkan kita untuk menggunakan kembali atau memperpanjang fungsionalitas, dan membangun hierarki class.
Kode ini berfungsi membuat 2 objek, yaitu cat dan dog, dimana kita bisa menginisialisasi nama pada keduanya, memanggil method eat dan sleep, serta memanggil meow atau bark 
yang merepresentasikan suara khas mereka (meong untuk kucing dan gonggongan untuk anjing). Bagian pertama mendefinisikan kelas Animal yang menyimpan nama hewan dan memiliki 
method untuk eat dan sleep. Bagian kedua mendefinisikan kelas Cat yang melakukan extends ke Class Animal, dengan tambahan method meow. Bagian ketiga mendefinisikan kelas Dog, 
dengan tambahan method bark. Kemudian, dua objek didefinisikan, satu cat dengan nama "Whiskers" dan satu dog dengan nama "Buddy". Akhirnya, method dipanggil untuk menampilkan 
perilaku dan suara dari masing-masing hewan.
-->

<?php
// Mendefinisikan kelas Animal
class Animal {
    protected $name; // Properti proteksi $name untuk menyimpan nama hewan
    
    // Konstruktor untuk menginisialisasi nama hewan saat objek dibuat
    public function __construct($name){
        $this->name = $name;
    }
    
    // Method untuk hewan makan
    public function eat(){
        echo $this->name . " is eating.<br>"; // Menampilkan pesan bahwa hewan sedang makan
    }

    // Method untuk hewan tidur
    public function sleep(){
        echo $this->name . " is sleeping.<br>"; // Menampilkan pesan bahwa hewan sedang tidur
    }
}

// Mendefinisikan kelas Cat yang merupakan turunan dari kelas Animal
class Cat extends Animal {
    // Method khusus kucing untuk bersuara meong
    public function meow(){
        echo $this->name . " says meow!<br>"; // Menampilkan pesan suara meong
    }
}

// Mendefinisikan kelas Dog yang merupakan turunan dari kelas Animal
class Dog extends Animal {
    // Method khusus anjing untuk bersuara woof
    public function bark(){
        echo $this->name . " says woof!<br>"; // Menampilkan pesan suara woof
    }
}

// Membuat objek $cat dari kelas Cat dengan nama "Whiskers"
$cat = new Cat("Whiskers");
// Membuat objek $dog dari kelas Dog dengan nama "Buddy"
$dog = new Dog("Buddy");

echo "<br>"; // Mencetak baris kosong untuk pemisah

// Memanggil method eat() pada objek $cat untuk menampilkan bahwa kucing sedang makan
$cat->eat();
// Memanggil method sleep() pada objek $dog untuk menampilkan bahwa anjing sedang tidur
$dog->sleep();

// Memanggil method meow() pada objek $cat untuk menampilkan suara meong
$cat->meow();
// Memanggil method bark() pada objek $dog untuk menampilkan suara woof
$dog->bark();

?>

