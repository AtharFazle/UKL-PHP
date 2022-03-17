<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');

    }
?>
<!DOCTYPE html>
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="logo.png" alt="" width="" height="24" class="d-inline-block align-text-top">
      Laundry
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/laundry2/home.php">Home</a>
        </li>
        <?php if($_SESSION['role']=='admin'): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="tampil_pelanggan.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Member
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/laundry2/member/tambah_pelanggan.php">Tambah Pelangggan</a></li>
            <li><a class="dropdown-item" href="/laundry2/member/tampil_pelanggan.php">Tampil Pelangggan</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Paket
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/laundry2/paket/tambah_paket.php">Tambah Paket</a></li>
            <li><a class="dropdown-item" href="/laundry2/paket/tampil_paket.php">Tampil Paket</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            User
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/laundry2/user/tambah_user.php">Tambah User</a></li>
            <li><a class="dropdown-item" href="/laundry2/user/tampil_user.php">Tampil User</a></li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Transaksi
          </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/laundry2/transaksi/transaksi.php">Tambah Transaksi</a></li>
            <li><a class="dropdown-item" href="/laundry2/transaksi/tampil_transaksi.php">Tampil Transaksi</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Outlet
          </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/laundry2/outlet/tambah_outlet.php">Tambah Outlet</a></li>
            <li><a class="dropdown-item" href="/laundry2/outlet/tampil_outlet.php">Tampil Outlet</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/laundry2/laporan.php">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/laundry2/logout.php">Logout</a>
        </li>
      </ul>
        <?php elseif($_SESSION['role']=='kasir'):  ?>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="tampil_pelanggan.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Member
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/laundry2/member/tambah_pelanggan.php">Tambah Pelangggan</a></li>
            <li><a class="dropdown-item" href="/laundry2/member/tampil_pelanggan.php">Tampil Pelangggan</a></li>
          </ul>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Transaksi
          </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/laundry2/transaksi/transaksi.php">Tambah Transaksi</a></li>
            <li><a class="dropdown-item" href="/laundry2/transaksi/tampil_transaksi.php">Tampil Transaksi</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/laundry2/laporan.php">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/laundry2/logout.php">Logout</a>
        </li>
      </ul>
        <?php elseif($_SESSION['role']=='owner'): ?>
        <li class="nav-item">
          <a class="nav-link" href="/laundry2/laporan.php">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/laundry2/logout.php">Logout</a>
        </li>
      </ul>
      <?php endif; ?>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
