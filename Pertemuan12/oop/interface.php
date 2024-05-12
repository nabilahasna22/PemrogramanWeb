<!--
Kode ini merupakan contoh penggunaan interface dan implementasi kelas untuk menetapkan perilaku umum (metode) 
yang harus diikuti oleh kelas lain. Dengan menggunakan properti dan metode kelas, ini membantu menjaga struktur 
kode yang terorganisir dan mudah dipelihara.
-->
<?php

// Interface Shape menyediakan kontrak untuk metode calculateArea().
interface Shape
{
    public function calculateArea();
}

// Interface Color menyediakan kontrak untuk metode getColor().
interface Color
{
    public function getColor();
}

// Kelas Circle mengimplementasikan interface Shape dan Color.
class Circle implements Shape, Color
{
    private $radius; // Properti untuk menyimpan jari-jari lingkaran.
    private $color; // Properti untuk menyimpan warna lingkaran.

    // Konstruktor untuk menginisialisasi jari-jari dan warna lingkaran.
    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    // Implementasi metode calculateArea() untuk menghitung luas lingkaran.
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    // Implementasi metode getColor() untuk mendapatkan warna lingkaran.
    public function getColor()
    {
        return $this->color;
    }
}
    // Cetak luas lingkaran dengan method calculateArea() dan warna lingkaran dengan method getColor().
    $circle = new Circle(5, "Blue");
    echo "Area of Circle: " . $circle->calculateArea() . "<br>";
    echo "Color of Circle: " . $circle->getColor() . "<br>";


?>