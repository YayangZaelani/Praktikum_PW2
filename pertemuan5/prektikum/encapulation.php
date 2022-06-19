<?php

// Class Buah

class Buah{
    public $nama;
    protected $warna;
    private $berat;
}

// Buat Objek
$mangga = new Buah();

// Akses Property
echo $mangga->nama = "Mangga"; // Berhasil

//Akses privat
echo $mangga->berat = 30;
// Akses protected
echo $mangga->warna = "Hijau";//error

?>