<?php
include ("../header.php");
include ("../login_guard.php");

    allow_page_access_exclusive(["admin","kasir"]);?>
  <link rel="stylesheet" href="../css/tambah.css">

        
  <div class="judul">
           <h2>TAMBAH PELANGGAN</h2>
   </div>
        <div class="container">
        <form action="proses_tambah_pelanggan.php " method="POST">
            <h2>Nama</h2>
            <input type="text" name="nama" value="" class="form-control">
            <h4>Telepon</h4>
            <input type="text" name="tlp" value="" class="form-control">
            <h4>Alamat</h4>
            <input type="text" name="alamat" value="" class="form-control">
            <h4>Jenis Kelamin</h4>
            <select name="jenis_kelamin"class="form-select" aria-label="Default select example">
                <option value="1"><h1>Laki-Laki</h1></option>
                <option value="2"><h1></h1>Perempuan</option>
                </select>
                <div class="button">
                <div class="d-grid gap-2">
  <button class="btn btn-success" type="submit" name="simpan" value="tambah pelanggan" >TAMBAH PELANGGAN </button>
  </div>
        </form>
        <?php
include("../footer.php");
 ?>