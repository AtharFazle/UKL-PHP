<?php 
include("../header.php");
include ("../login_guard.php");

allow_page_access_exclusive(["admin"]);
?>
  <link rel="stylesheet" href="../css/tambah.css">
        <div class="container">
        <form action="proses_tambah_paket.php" method="POST">
   <div class="judul">
           <h2>TAMBAH PAKET</h2>
   </div>
            <h4>JENIS</h4>
            <input type="text" name="jenis" value="" class="form-control">
            <h4>HARGA</h4>
            <input type="text" name="harga" value="" class="form-control">
            <div class="button">
                <div class="d-grid gap-2">
  <button class="btn btn-success" type="submit" name="simpan" value="tambah paket" >TAMBAH PAKET </button>
  </div>
        </form>
        
<?php include("../footer.php"); ?>