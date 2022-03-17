<?php
include ("../header.php");
include ("../login_guard.php");

allow_page_access_exclusive(["admin","kasir"]);
?>
<link rel="stylesheet" href="../css/tampil.css">

    <div class="judul">
    <h3>TAMPIL TRANSAKSI</h3>
    </div>
    <div class="table">
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>NAMA PELANGGAN</th>
                
                <th>TGL</th>
                <th>BATAS WAKTU</th>
                <th>TGL BAYAR</th>
                
                <th>STATUS</th>
                <th>DIBAYAR</th>
                <th>JENIS</th>
                <th>QTY</th>

                <th>JUMLAH</th>
                <th>AKSI</th>

            </tr>

        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            
            $qry_transaksi=mysqli_query($conn,"select t.id as id, m.nama as nama_member, t.tgl as tgl, batas_waktu, tgl_bayar, status, dibayar from transaksi t, member m where t.id_member = m.id");
            echo mysqli_error($conn);
            $no=0;
            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                $qry_detail_transaksi=mysqli_query($conn,"select *, detil_transaksi.qty * paket.harga as total from detil_transaksi, paket where id_transaksi = ".$data_transaksi['id']." AND paket.id = detil_transaksi.id_paket");
                $jumlah_pesanan = mysqli_num_rows($qry_detail_transaksi);

                $no++;

                $i = 0;
                while($data_dtl_transaksi = mysqli_fetch_array($qry_detail_transaksi)) {
                    $i++;
                    if ($i == 1) {
                ?>
                <tr>
                    
                    <td><?=$no?></td>
            
                    <td><?=$data_transaksi['nama_member']?></td>
                    <td><?=$data_transaksi['tgl']?></td>
                    <td><?=$data_transaksi['batas_waktu']?></td>
                    <td><?=$data_transaksi['tgl_bayar']?></td>
                    <td><?=$data_transaksi['status']?></td>
                    <td><?=$data_transaksi['dibayar']?></td>
                    <td><?=$data_dtl_transaksi['jenis']?></td>
                    <td><?=$data_dtl_transaksi['qty']?></td>
                    <td><?=$data_dtl_transaksi['total']?></td>

                    <td>
                    <a href="hapus.php?id=<?=$data_transaksi['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
   <?php
                    } else {
?>
                                    <tr>
                    
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?=$data_dtl_transaksi['jenis']?></td>
                    <td><?=$data_dtl_transaksi['qty']?></td>
                    <td><?=$data_dtl_transaksi['total']?></td>

                    <td>
                    </td>
                </tr>

<?php
                    }
            }}
         ?>
        </tbody>

    </table>
    <?php
include("../footer.php");
 ?>