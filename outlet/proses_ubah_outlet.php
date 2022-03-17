<?php
if ($_POST) {
    $id_produk = $_POST['id_produk'];
    $nama = $_POST['nama'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $alamat = $_POST['alamat'];
    if (empty($nama)) {
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } elseif (empty($nomor_telepon)) {
        echo "<script>alert('nomor telepon tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_outlet.php';</script>";
    } else {
        include "../koneksi.php";
        if (empty($nama)) {
            $update = mysqli_query($conn, "update outlet set nama='" . $nama . "',nomor_telepon='" . $nomor_telepon ."',alamat='" . $alamat ."' where id_produk = '" . $id_produk . "' ") or die(mysqli_error($conn));
            echo "update outlet set nama='" . $nama . "',alamat='" . $alamat ."' where id_produk = '" . $id_produk . "' ";
            if ($update) {
                echo "<script>alert('Sukses update outlet');location.href='tampil_outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal update outlet');location.href='ubah_outlet.php?id=" . $id_produk . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "update outlet set nama='" . $nama . "',alamat='" . $alamat ."',nomor_telepon='" . $nomor_telepon ."' where id_produk = '" . $id_produk . "' ") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update outlet');location.href='tampil_outlet.php';</script>";
            } else {
                echo "<script>alert('Gagal update outlet');location.href='ubah_outlet.php?id=" . $id_produk . "';</script>";
            }
        }
    }
}

    
