<?php
include ("../header.php");
include ("../login_guard.php");

allow_page_access_exclusive(["admin"]);
?>
<link rel="stylesheet" href="../css/tampil.css">
<div class="judul">
    <h3>TAMPIL PAKET</h3>
    </div>
    <div class="table">
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>JENIS</th>
                <th>HARGA</th>
                <th>AKSI</th>
            </tr>

        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $qry_paket=mysqli_query($conn,"select *from paket");
            $no=0;
            while($data_paket=mysqli_fetch_array($qry_paket)){
                $no++; ?>
                <tr>
                    <td><?=$no?></td><td><?=$data_paket['jenis']?></td>
                    <td><?=$data_paket['harga']?></td>
                    <td><a href="ubah_paket.php?id=<?=$data_paket['id']?>" class="btn btn-success">Ubah</a> | 
                    <a href="hapus.php?id=<?=$data_paket['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                    
                </tr>
                
   <?php
            }
         ?>
        </tbody>

    </table>
 <?php
include("../footer.php");
 ?>