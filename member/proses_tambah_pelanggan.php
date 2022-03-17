<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tlp=$_POST['tlp'];
    $jenis_kelamin=$_POST['jenis_kelamin'];

    if(empty($nama)){
        echo  "<script>alert('nama tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
        }elseif(empty($alamat)){
            echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
        }elseif(empty($tlp)){
            echo "<script>alert('telepon tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
        }elseif(empty($jenis_kelamin)){
            echo"<script>alert('jenis kelamin tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    }else{
        include "../koneksi.php";
        $insert=mysqli_query($conn,"insert into member (nama,alamat,tlp,jenis_kelamin) value ('".$nama."','".$alamat."','".$tlp."','".$jenis_kelamin."')");
        if($insert){
            echo"<script>alert('Sukses menambahkan');location.href='tambah_pelanggan.php';</script>";
        }else{
            echo"<script>alert('gagal menambahkan ');location.href='tambah_pelanggan.php';</script>";
        }
    }
}