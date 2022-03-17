<?php
include ("header.php");
include ("login_guard.php");

allow_page_access_exclusive(["admin"]);
?>
<link rel="stylesheet" href="../css/tampil.css">
<div class="semua" style="justify-content: center;align-items: center;padding-left: 5%;padding-right: 5%">
    <div class="judul">
        <hr style="color: red;">
    <h3 style="padding-top: 1rem; padding-bottom: 1rem; justify-items: center;text-align: center;">TAMPIL PELANGGAN</h3>
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


            </tr>

        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_member=mysqli_query($conn,"select *from member");
            $no=0;
            while($data_member=mysqli_fetch_array($qry_member)){
                $no++; ?>
                <tr>
                    <td><?=$no?></td><td><?=$data_member['nama']?></td>
                    <td><?=$data_member['tlp']?></td><td><?=$data_member['alamat']?></td><td><?=$data_member['jenis_kelamin']?></td>
                    
                </tr>
   <?php
            }
         ?>
        </tbody>

    </table>
    <hr style="color: red; margin-top: 2rem;">
    <h3 style="padding-top: 1rem; padding-bottom: 1rem; justify-items: center;text-align: center;">TAMPIL USER</h3>
    <div class="table">
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>USERNAME</th>
                <th>ROLE</th>



            </tr>

        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_user=mysqli_query($conn,"select *from user");
            $no=0;
            while($data_user=mysqli_fetch_array($qry_user)){
                $no++; ?>
                <tr>
                    <td><?=$no?></td><td><?=$data_user['nama']?></td>
                    </td><td><?=$data_user['username']?></td><td><?=$data_user['role']?></td>
                    
                </tr>
   <?php
            }
         ?>
        </tbody>

    </table>
    <hr style="color: red; margin-top: 2rem;">
    <h3 style="padding-top: 1rem; padding-bottom: 1rem; justify-items: center;text-align: center;">TAMPIL PAKET</h3>
    <div class="table">
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>JENIS</th>
                <th>HARGA</th>
                
            </tr>

        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_paket=mysqli_query($conn,"select *from paket");
            $no=0;
            while($data_paket=mysqli_fetch_array($qry_paket)){
                $no++; ?>
                <tr>
                    <td><?=$no?></td><td><?=$data_paket['jenis']?></td>
                    <td><?=$data_paket['harga']?></td>
                    
                    
                </tr>
                
   <?php
            }
         ?>
        </tbody>

    </table>
    <hr style="color: red; margin-top: 2rem;"></hr>
    <h3 style="padding-top: 1rem; padding-bottom: 1rem; justify-items: center;text-align: center;">TAMPIL OUTLET</h3>
    <div class="table">
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NOMOR TELEPON</th>
                <th>ALAMAT</th>

            </tr>

        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_outlet=mysqli_query($conn,"select *from outlet");
            $no=0;
            while($data_outlet=mysqli_fetch_array($qry_outlet)){
                $no++; ?>
                <tr>
                    <td><?=$no?></td><td><?=$data_outlet['nama']?></td>
                    <td><?=$data_outlet['nomor_telepon']?></td>
                    <td><?=$data_outlet['alamat']?></td>
                    
                </tr>
                
   <?php
            }
         ?>
        </tbody>

    </table>
    <hr style="color: red; margin-top: 2rem;">
    <h3 style="padding-top: 1rem; padding-bottom: 1rem; justify-items: center;text-align: center;">TAMPIL TRANSAKSI</h3>
    <div class="table">
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>NAMA PELANGGAN</th>
                <th>JENIS</th>
                <th>TGL</th>
                <th>BATAS WAKTU</th>
                <th>TGL BAYAR</th>
                <th>STATUS</th>
                <th>DIBAYAR</th>
                <th>JUMLAH</th>


            </tr>

        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            
            $qry_transaksi=mysqli_query($conn,"SELECT m.nama,trx.batas_waktu,trx.tgl_bayar, p.jenis, d_trx.qty, trx.tgl, trx.status, trx.dibayar, trx.id, p.harga, u.username as operator FROM transaksi trx INNER JOIN detil_transaksi d_trx ON d_trx.id_transaksi = trx.id INNER JOIN user u ON trx.id_user = u.id INNER JOIN member m ON trx.id_member = m.id INNER JOIN paket p ON d_trx.id_paket = p.id;");

            $no=0;
            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                $no++; ?>
                <tr>
                    
                    <td><?=$no?></td><td><?=$data_transaksi['nama']?></td>
                    <td><?=$data_transaksi['jenis']?></td>
                    <td><?=$data_transaksi['tgl']?></td><td><?=$data_transaksi['batas_waktu']?></td><td><?=$data_transaksi['tgl_bayar']?></td><td><?=$data_transaksi['status']?></td><td><?=$data_transaksi['dibayar']?></td><td><?=$data_transaksi['qty']?></td>
                </tr>
   <?php
            }
         ?>
        </tbody>

    </table>
    <div class="button">
                <div class="d-grid gap-2">
                <button class="btn btn-success " onclick="const printBtn = document.getElementById('print-btn'); printBtn.hidden = true; window.print();" id="print-btn">Print</button>
  </div>
    </div>
    
    <?php
include("footer.php");
 ?>