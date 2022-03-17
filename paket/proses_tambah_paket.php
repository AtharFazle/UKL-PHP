<?php
if($_POST){
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];

    if(empty($jenis)){
        echo  "<script>alert('jenis tidak boleh kosong');location.href='tambah_paket.php';</script>";
        }elseif(empty($harga)){
            echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_paket.php';</script>";
    }else{
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into paket (jenis,harga) value ('".$jenis."','".$harga."')");
        if($insert){
            echo"<script>alert('Sukses menambahkan');location.href='tambah_paket.php';</script>";
        }else{
            echo"<script>alert('gagal menambahkan ');location.href='tambah_paket.php';</script>";
        }
    }
}