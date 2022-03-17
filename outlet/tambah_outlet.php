<?php
include ("../header.php");
include ("../login_guard.php");

    allow_page_access_exclusive(["admin"]);?>
  <link rel="stylesheet" href="../css/tambah.css">

        
  <h3 style="justify-content: center;text-align: center;padding-top: 2rem;">Tambah Outlet</h3>
  <div class="form" style="justify-content: center; align-items: center; padding-left: 10%; padding-right: 10%">
<form action="proses_tambah_outlet.php" method="post" enctype="multipart/form-data" style="justify-content: center; align-items: center;"> 
NAMA:

<input type="text" name="nama" value="" class="form-control">

ALAMAT :
<input type="text" name="alamat" value="" class="form-control">
NOMOR TELEPON :
<input type="text" name="nomor_telepon" value="" class="form-control">
<div class="button" style="padding-top: 2rem;">
                <div class="d-grid gap-2">
  <button class="btn btn-success" type="submit" name="simpan" value="tambah outlet" >Tambah Outlet </button>
  </div>
</form>
</div>
        <?php
include("../footer.php");
 ?>