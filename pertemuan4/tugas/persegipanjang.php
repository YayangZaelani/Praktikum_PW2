<?php

class PersegiPanjang{
    public $panjang;
    public $lebar;

    function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    function hitungNilai(){
        return $this->panjang;
        return $this->lebar;
    }

    function mencariLuas(){
        echo "Mencari Luas";
        echo "<br>";
        echo "Panjang : ". $this->panjang, " x ", "Lebar : ". $this->lebar;
        echo "<br>";
        echo "= ", $this->panjang * $this->lebar;
        echo "<br>";
        echo "<br>";
    }

    function mencariKeliling(){
        echo "Mencari Keliling";
        echo "<br>";
        echo "Panjang pangkat 2 : ". $this->panjang * $this->panjang, " + ", "Lebar pangkat 2 : ". $this->lebar * $this->lebar ;
        echo "<br>";
        echo "= ", ($this->panjang * $this->panjang) + ($this->lebar * $this->lebar);
    }
}

$nilai = new PersegiPanjang(5, 6);

$nilai->mencariLuas();
$nilai->mencariKeliling();
?>