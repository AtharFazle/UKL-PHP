<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ubah.css">
    <title>UBAH PELANGGAN</title>
</head>
<body>
    <?php
    include "../koneksi.php";
    $qry_get_member=mysqli_query($conn,"select *from member where id = '".$_GET['id']."'");
    $dt_member=mysqli_fetch_array($qry_get_member);
    include ("../login_guard.php");

    allow_page_access_exclusive(["admin","kasir"]);
    ?>
  <h3>UBAH PELANGGAN</h3>
  <div class="form">
  <form action="proses_ubah_pelanggan.php" method="POST">
      <input type="hidden" name="id"value="<?=$dt_member['id']?>">
      NAMA:
      <input type="text" name="nama"value="<?=$dt_member['nama']?>"class="form-control">
     TELEPON:
     <input type="text" name="tlp"value="<?=$dt_member['tlp']?>"class="form-control">
     ALAMAT:
     <input type="text" name="alamat"value="<?=$dt_member['alamat']?>"class="form-control">
      GENDER:
     <?php 
        $arr_jenis_kelamin=array('laki-laki'=>'laki-laki','perempuan'=>'perempuan');
        ?>
        <select name="jenis_kelamin" class="form-control">
            <?php foreach ($arr_jenis_kelamin as $key_jenis_kelamin => $val_jenis_kelamin):
                if($key_jenis_kelamin==$dt_member['jenis_kelamin']){
                    $selek="selected";
                } else {
                    $selek="";
                }
            ?>
                <option value="<?=$key_jenis_kelamin?>" <?=$selek?>> <?=$val_jenis_kelamin?></option>
            <?php endforeach ?>
        </select>
       

        <div class="button">
                <div class="d-grid gap-2">
  <button class="btn btn-success" type="submit" name="simpan" value="ubah pelanggan" >UBAH PELANGGAN </button>
  </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>