<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>UBAH PELANGGAN</title>
</head>
<body>
    <?php
    include "../koneksi.php";
    $qry_get_outlet=mysqli_query($conn,"select * from outlet where id_produk = '".$_GET['id_produk']."'");
    $dt_outlet=mysqli_fetch_array($qry_get_outlet);
    include ("../login_guard.php");

allow_page_access_exclusive(["admin"]);
    ?>
  <h3>UBAH PELANGGAN</h3>
  <form action="proses_ubah_outlet.php" method="POST">
      <input type="hidden" name="id_produk"value="<?=$dt_outlet['id_produk']?>">
      NAMA :
      <input type="text" name="nama"value="<?=$dt_outlet['nama']?>"class="form-control">
     NOMOR TELEPON :
     <input type="text" name="nomor_telepon"value="<?=$dt_outlet['nomor_telepon']?>"class="form-control">
     ALAMAT :
     <input type="text" name="alamat"value="<?=$dt_outlet['alamat']?>"class="form-control">
     
     <div class="button">
                <div class="d-grid gap-2">
  <button class="btn btn-success" type="submit" name="simpan" value="ubah outlet" >UBAH outlet </button>
  </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>