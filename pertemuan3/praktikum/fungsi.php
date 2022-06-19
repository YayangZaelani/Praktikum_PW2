<?php
// Cara Membuat Fungsi
// fungtion namafungsi(parameter){
//     code disini
// }

function luaspersegi($sisi){
    $rumus = $sisi * $sisi;
    return $rumus;
}

echo "Hasilnya Adalah :". luaspersegi(10);
echo "<br>";

//Bikin Fungsi nama
function nama(){
    echo "Nama Saya Adalah M. Yayang Zaelani";
}

nama();
echo "<br>";

//fungsi menggunakan parameter
//parameter defaule 
function perkenalan($nama="Yayang"){
    echo "Perkenalkan nama saya :". $nama;
}

perkenalan();
?>