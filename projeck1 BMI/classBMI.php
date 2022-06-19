<?php
    class BMIPasien
    {
    public $nama,
        $berat,
        $tinggi,
        $umur,
        $jk;

    public function hasilBMI()
    {
    return "<b>Nama : $this->nama <br></br>
            Berat Badan : $this->berat <br></br>
            Tinggi Badan : $this->tinggi <br></br>
            Umur : $this->umur <br></br>
            Jenis Kelamin : $this->jk </b>";
    }
    public function statusBMI($BMI)
    {
        if ($BMI < 18.5){
            return "<td>Kekurangan Berat Badan</td>";
        } elseif ($BMI >= 18.5 && $BMI <= 24.9) {
            return "<td>Ideal</td>";
        } elseif ($BMI >= 25.0 && $BMI <= 29.9) {
            return "<td>Kelebihan Berat Badan</td>";
        } else {
            return "<td>Obesitas</td>";
        }
    }
}

$pasien1 = ['nama' => 'Mely', 'kelamin' => 'Perempuan', 'umur' => 19, 'berat' =>50.0, 'tinggi' => 159];
$pasien2 = ['nama' => 'Parid', 'kelamin' => 'Laki-laki', 'umur' => 21, 'berat' =>70.5, 'tinggi' => 179];
$pasien3 = ['nama' => 'Zaelani', 'kelamin' => 'Laki-Laki', 'umur' => 20, 'berat' =>70.0, 'tinggi' => 179];


$ar_pasien = [$pasien1, $pasien2, $pasien3];

?>