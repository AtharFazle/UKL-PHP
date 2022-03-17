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
    $qry_get_user=mysqli_query($conn,"select *from user where id = '".$_GET['id']."'");
    $dt_user=mysqli_fetch_array($qry_get_user);
    include ("../login_guard.php");
    allow_page_access_exclusive(["admin"]);
    ?>
  <h3>UBAH USER</h3>
  <div class="form">
  <form action="proses_ubah_user.php" method="POST">
      <input type="hidden" name="id"value="<?=$dt_user['id']?>">
      NAMA:
      <input type="text" name="nama"value="<?=$dt_user['nama']?>"class="form-control">
     USERNAME
     <input type="text" name="username"value="<?=$dt_user['username']?>"class="form-control">
     PASSWORD
     <input type="text" name="password"value=""class="form-control">
      ROLE
     <?php 
        $arr_role=array('admin'=>'admin','kasir'=>'kasir');
        ?>
        <select name="role" class="form-control">
            <?php foreach ($arr_role as $key_role => $val_role):
                if($key_role==$dt_user['role']){
                    $selek="selected";
                } else {
                    $selek="";
                }
            ?>
                <option value="<?=$key_role?>" <?=$selek?>> <?=$val_role?></option>
            <?php endforeach ?>
        </select>
       

        <div class="button">
                <div class="d-grid gap-2">
  <button class="btn btn-success" type="submit" name="simpan" value="ubah user" >UBAH PELANGGAN </button>
  </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>