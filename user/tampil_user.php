<?php
include ("../header.php");

include ("../login_guard.php");

allow_page_access_exclusive(["admin"]);
?>
<link rel="stylesheet" href="../css/tampil.css">

    <div class="judul">
    <h3>TAMPIL USER</h3>
    </div>
    <div class="table">
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>USERNAME</th>
                <th>ROLE</th>

                <th>AKSI</th>

            </tr>

        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $qry_user=mysqli_query($conn,"select *from user");
            $no=0;
            while($data_user=mysqli_fetch_array($qry_user)){
                $no++; ?>
                <tr>
                    <td><?=$no?></td><td><?=$data_user['nama']?></td>
                    </td><td><?=$data_user['username']?></td><td><?=$data_user['role']?></td>
                    <td><a href="ubah_user.php?id=<?=$data_user['id']?>" class="btn btn-success">Ubah</a> |
                    <a href="hapus.php?id=<?=$data_user['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                </tr>
   <?php
            }
         ?>
        </tbody>

    </table>
    <?php
include("../footer.php");
 ?>