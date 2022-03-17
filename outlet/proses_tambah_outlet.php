<?php
if($_POST){
    $nama=$_POST['nama'];
    $nomor_telepon=$_POST['nomor_telepon'];
    $alamat=$_POST['alamat'];

    if(empty($nama)){
        echo  "<script>alert('nama tidak boleh kosong');location.href='tambah_outlet.php';</script>";
        }elseif(empty($nomor_telepon)){
            echo "<script>alert('nomor telepon tidak boleh kosong');location.href='tambah_outlet.php';</script>";
        }elseif(empty($alamat)){
            echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    }else{
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into outlet (nama,nomor_telepon,alamat) value ('$nama','".$nomor_telepon."','".$alamat."')");
        if($insert){
            echo"<script>alert('Sukses menambahkan');location.href='tambah_outlet.php';</script>";
        }else{
            echo"<script>alert('gagal menambahkan ');location.href='tambah_outlet.php';</script>";
        }
    }
}