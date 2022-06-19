<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>Form Edit Matakuliah</h1>
<?php echo form_open("matakuliah/save") ?>
<div class="form-group row">
    <label for="nama_matkul" class="col-4 col-form-label">nama</label> 
    <div class="col-8">
      <input id="nama_matkul" name="nama_matkul" placeholder="Masukan nama" type="text" value="<?php echo $obj_matakuliah->nama_matkul ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="SKS" class="col-4 col-form-label">SKS</label> 
    <div class="col-8">
      <input id="SKS" name="SKS" placeholder="Masukan SKS" type="text" value="<?php echo $obj_matakuliah->sks ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="kode" name="kode" type="text" class="form-control" value="<?php echo $obj_matakuliah->kode ?>">
    </div>
  </div> 
  <div class="form-group row">
    <label for="dosen_id" class="col-4 col-form-label">Dosen</label> 
    <div class="col-8">
      <select class="form-control" name="dosen_id" id="dosen_id">
        <?php
        include "conofig.php";
        $result = mysqli_query($connect, "SELECT * FROM dosen");
        while ($row = mysqli_fetch_array($result)) {?>
        <option value="<?php echo $row[0] ?>">
        <?php	echo $row[0] ?>
      </option>
      <?php } ?>
       
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close() ?>
</div>