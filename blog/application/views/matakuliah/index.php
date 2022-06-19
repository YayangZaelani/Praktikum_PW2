<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matauliah</title>
    <script>
        function hapusMatakuliah(pesan){
            if (confirm(pesan)){
                return true;
            }else{
                return false;
            }
        }
    </script>
</head>
<?php 
$username = $this->session->userdata('username');
if ($username) {
    echo "<h2>Selamat Datang $username</h2>";
}
?>
<body>
    <div class="col-md-12">
    <h3>Mata Kuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
                <th>ID Dosen</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($matakuliah as $matkul) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $matkul -> nama_matkul ?></td>
                <td><?php echo $matkul -> sks ?></td>
                <td><?php echo $matkul -> kode ?></td>
                <td><?php echo $matkul -> dosen_id ?></td>
                <td>
                    <a href= <?php echo base_url("index.php/matakuliah/edit/$matkul->id")?> class="btn btn-success btn-lg active">Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/matakuliah/delete/$matkul->id")?> class="btn btn-danger btn-lg active" onclick="return hapusMatakuliah('Anda Yakin Akan Menghapus Matakuliah Yang Bernama <?php echo $matkul-> nama_matkul ?>?')">Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href= <?php echo base_url("index.php/matakuliah/form")?> class="btn btn-primary btn-lg active">Tambah</a>
    </div>
</body>
</html>