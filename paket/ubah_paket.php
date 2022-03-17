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
    $qry_get_paket=mysqli_query($conn,"select * from paket where id = '".$_GET['id']."'");
    $dt_paket=mysqli_fetch_array($qry_get_paket);
    include ("../login_guard.php");

allow_page_access_exclusive(["admin"]);
    ?>
  <h3>UBAH PELANGGAN</h3>
  <form action="proses_ubah_paket.php" method="POST">
      <input type="hidden" name="id"value="<?=$dt_paket['id']?>">
      USER :
      <input type="text" name="jenis"value="<?=$dt_paket['jenis']?>"class="form-control">
     PASSWORD : 
     <input type="text" name="harga"value="<?=$dt_paket['harga']?>"class="form-control">
     
     <div class="button">
                <div class="d-grid gap-2">
  <button class="btn btn-success" type="submit" name="simpan" value="ubah paket" >UBAH PAKET </button>
  </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>