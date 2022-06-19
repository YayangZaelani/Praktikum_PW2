<?php

// Parent Class
class Buah{
    public $nama;
    public $warna;

    // methode construct
    public function __construct($nama, $warna)
    {
        $this->nama = $nama;
        $this->warna = $warna;
    }

    //method info
    public function intro(){
        echo "Ini adalah buah dengan nama : {$this->nama} dan warna {$this->warna}";
    }
}

// Child class
class Mangga extends Buah{
    // method biij
    public function biji(){
        echo "Buah ini berbiji 1"; 
    }
}

// Buah ojek
$mangga_indramayu = new Mangga("Mangga Indramayu", "Hijau");
$mangga_indramayu->intro();
echo "<br>";
$mangga_indramayu->biji();

?>