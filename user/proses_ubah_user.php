<?php
if ($_POST) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    if (empty($nama)) {
        echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "../koneksi.php";
        if (empty($role)) {
            $update = mysqli_query($conn, "update user set nama='" . $nama . "',username='" . $username . "',password='" . md5($password) . "', role='" . $role . "' where id = '" . $id . "' ") or die(mysqli_error($conn));
            echo "update user set nama='" . $nama . "',username='" . $username . "',password='" . md5($password) . "', role='" . $role . "' where id = '" . $id . "' ";
            if ($update) {
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id=" . $id . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "update user set nama='" . $nama . "',username='" . $username . "',password='" . md5($password) . "', role='" . $role . "' where id = '" . $id . "'") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id=" . $id . "';</script>";
            }
        }
    }
}