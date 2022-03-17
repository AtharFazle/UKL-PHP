<?php
if ($_POST) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tlp = $_POST['tlp'];
    if (empty($nama)) {
        echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif (empty($alamat)) {
        echo "<script>alert('tlp tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif (empty($jenis_kelamin)) {
        echo "<script>alert('tlp tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } else {
        include "../koneksi.php";
        if (empty($tlp)) {
            $update = mysqli_query($conn, "update member set nama='" . $nama . "',alamat='" . $alamat . "',jenis_kelamin='" . $jenis_kelamin . "', tlp='" . $tlp . "' where id = '" . $id . "' ") or die(mysqli_error($conn));
            echo "update member set nama='" . $nama . "',alamat='" . $alamat . "',jenis_kelamin='" . $jenis_kelamin . "', tlp='" . $tlp . "' where id = '" . $id . "' ";
            if ($update) {
                echo "<script>alert('Sukses update member');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_pelanggan.php?id=" . $id . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "update member set nama='" . $nama . "',alamat='" . $alamat . "',jenis_kelamin='" . $jenis_kelamin . "', tlp='" . $tlp . "' where id = '" . $id . "'") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update member');location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_pelanggan.php?id=" . $id . "';</script>";
            }
        }
    }
}