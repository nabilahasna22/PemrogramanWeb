<!--
Kode ini digunakan untuk menghitung luas berbagai bentuk geometris. Shape berfungsi sebagai cetakan utamanya dengan satu fungsi, calculateArea(),
digunakan untuk menghitung luas. Circle dan Rectangle merupakan contoh bentuk yang dibuat dari cetakan Shape, masing-masing dengan properti sendiri 
(seperti radius untuk lingkaran dan lebar serta tinggi untuk persegi panjang) dan rumus luas yang sesuai. Fungsi printArea mencetak luas bentuk dengan 
memanggil calculateArea(). Dua objek bentuk, lingkaran dan persegi panjang, dibuat dan luasnya dicetak menggunakan printArea.-->

<?php

interface Shape
{
    public function calculateArea();
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

function printArea(Shape $shape)
{
    echo "Area: " . $shape->calculateArea() . "<br>";
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

printArea($circle);
printArea($rectangle);
?>