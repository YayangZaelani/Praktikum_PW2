<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Latihan Form Processing</title>
    <style>
       
    </style>
</head>
<body>
    <div class="header">
        <h4>Sistem Penilaian</h4>
    </div>
    <h3 style="margin-left: 10px;">Form Nilai Siswa</h3>
        <hr>
        <div class="m-5 border border-success p-4 rounded">
            <form method="POST" autocomplete="off" action="form.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">NIM</label> 
                    <div class="col-3">
                    <input id="nim" name="nim" placeholder="Masukan Nim Anda" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-3">
                    <select id="select" name="matkul" class="custom-select">
                        <option value="DDP">Dasar Dasar Pemograman</option>
                        <option value="BDI">Basis Data</option>
                        <option value="WEB1">Pemograman Web</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-3">
                    <input id="nilai" name="nilai" placeholder="Nilai" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                
            </form>
        </div>

                <!-- Cetak php -->
                <?php
                require_once 'class_nilaimahasiswa.php';
                if($_POST){
                    $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
                    $keterangan = $ns->hitungNilai();
                    $hasil1 = $ns->grade($keterangan);
                    $hasil2 = $ns->predikat($keterangan);
                    echo "NIM : ". $ns->nim;
                    echo "<br>";
                    echo "Matakuliah : ". $ns->matkul;
                    echo "<br>";
                    echo "Nilai : ". $ns->nilai;
                    echo "<br>";
                    echo "Status : ". $hasil1;
                    echo "<br>"; 
                    echo "Grade : ". $hasil2; 
                }
                ?>
                
</body>
</html>