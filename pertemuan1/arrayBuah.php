<?php
    //echo 'yayang';
    $mahasiswa = ['muhammad', 'yayang', 'zaelani'];
    
    //echo $mahasiswa[0];
    //echo "<br />";
   //echo $mahasiswa[1];
    //echo "<br />";

    foreach ($mahasiswa as $mhs) {
        echo $mhs;
        echo "<br />";
    }

    //echo "<br />";
    //echo "<br />";
    //echo "<br />";
    $mahasiswa = [
        ["nama" => "zey", "nim" => "0110121294", "uts" => 100, "uas" => 100],
        ["nama" => "yang", "nim" => "0110121295", "uts" => 90, "uas" => 90],
    ];

    //echo $mahasiswa[0]["nama"]

    foreach ($mahasiswa as $mhs) {
        echo $mhs["nama"];
        echo "<br />";
    }
    
?>