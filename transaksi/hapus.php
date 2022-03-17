<?php 
    if($_GET['id']){
        include "../koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from transaksi where id='".$_GET['id']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus paket');location.href='tampil_transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus paket');location.href='tampil_transaksi.php';</script>";
        }
    }
?>