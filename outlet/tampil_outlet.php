<?php
include ("../header.php");
include ("../login_guard.php");

    allow_page_access_exclusive(["admin"]);
?>
<link rel="stylesheet" href="../css/tampil.css">
<div class="judul">
    <h3>TAMPIL OUTLET</h3>
    </div>
    <div class="table">
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NOMOR TELEPON</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
            </tr>

        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $qry_outlet=mysqli_query($conn,"select *from outlet");
            $no=0;
            while($data_outlet=mysqli_fetch_array($qry_outlet)){
                $no++; ?>
                <tr>
                    <td><?=$no?></td><td><?=$data_outlet['nama']?></td>
                    <td><?=$data_outlet['nomor_telepon']?></td>
                    <td><?=$data_outlet['alamat']?></td>
                    <td><a href="ubah_outlet.php?id_produk=<?=$data_outlet['id_produk']?>" class="btn btn-success">Ubah</a> | 
                    <a href="hapus.php?id=<?=$data_outlet['id_produk']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                </tr>
                
   <?php
            }
         ?>
        </tbody>

    </table>
 <?php
include("../footer.php");
 ?>