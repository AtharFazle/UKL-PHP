<?php
include ("../header.php");
include ("../login_guard.php");
allow_page_access_exclusive(["admin","kasir"]);
    ?>
<link rel="stylesheet" href="../css/tampil.css">

    <div class="judul">
    <h3>TAMPIL PELANGGAN</h3>
    </div>
    <div class="table">
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>NAMA PELANGGAN</th>
                <th>TELEPON</th>
                <th>ALAMAT</th>
                <th>GENDER</th>
                <th>AKSI</th>

            </tr>

        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $qry_member=mysqli_query($conn,"select *from member");
            $no=0;
            while($data_member=mysqli_fetch_array($qry_member)){
                $no++; ?>
                <tr>
                    <td><?=$no?></td><td><?=$data_member['nama']?></td>
                    <td><?=$data_member['tlp']?></td><td><?=$data_member['alamat']?></td><td><?=$data_member['jenis_kelamin']?></td>
                    <td><a href="ubah_pelanggan.php?id=<?=$data_member['id']?>" class="btn btn-success">Ubah</a> |
                    <a href="hapus.php?id=<?=$data_member['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                </tr>
   <?php
            }
         ?>
        </tbody>

    </table>
    <?php
include("../footer.php");
 ?>