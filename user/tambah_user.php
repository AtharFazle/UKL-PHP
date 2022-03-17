<?php 
include("../header.php");
include ("../login_guard.php");

allow_page_access_exclusive(["admin"]);
?>
  <link rel="stylesheet" href="../css/tambah.css">
  <div class="judul">
           <h2>TAMBAH USER</h2>
   </div>
        <div class="container">
        <form action="proses_tambah_user.php " method="POST">
            <h4 style="padding-bottom: 0.3rem; padding-top: 0.3rem;">Nama</h4>
            <input type="text" name="nama" value="" class="form-control">
            <h4 style="padding-bottom: 0.3rem; padding-top: 0.3rem;">Username</h4>
            <input type="text" name="username" value="" class="form-control">
            <h4 style="padding-bottom: 0.3rem; padding-top: 0.3rem;">Password</h4>
            <input type="text" name="password" value="" class="form-control">
            <h4 style="padding-bottom: 0.3rem; padding-top: 0.3rem;">Role</h4>
            <select name="role"class="form-select" aria-label="Default select example">
                <option value="1"><h1>admin</h1></option>
                <option value="2"><h1></h1>kasir</option>
                <option value="3"><h1></h1>owner</option>
                </select>
                <div class="button">
                <div class="d-grid gap-2">
  <button class="btn btn-success" type="submit" name="simpan" value="tambah user" >TAMBAH USER </button>
  </div>
        </form>
     <?php
     include("../footer.php");
     ?>