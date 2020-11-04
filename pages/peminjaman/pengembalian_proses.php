<?php 
include "config/koneksi.php";
$id_pinjam=$_GET['id_pinjam'];
$id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$kd_buku=$_POST['kd_buku'];
$keterangan_buku=$_POST['keterangan_buku'];
$tgl_pinjam=$_POST['tgl_pinjam'];
$tgl_kembali=date('Y-m-d', strtotime('+3 days', strtotime($tgl_pinjam)));

$cari_hari = abs(strtotime($tgl_pinjam) - strtotime($tgl_kembali));
$hitung_hari = floor($cari_hari/(60*60*24));

if($hitung_hari > 7){
    $telat = $hitung_hari - 7;
    $denda_telat = 1000 * $telat;
}else{
    $telat = 0;
    $denda_telat = 0;
}
 
if($keterangan_buku == 'Tidak Ada'){
    $denda_buku = 0;
}elseif($keterangan_buku == 'Rusak'){
    $denda_buku = 30000;
}else{
    $denda_buku = 80000;
}
 
$total_denda = $denda_telat + $denda_buku;

 ?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      PENGEMBALIAN BUKU
      </h1>
      <ol class="breadcrumb">
        <li><a href="pagetemplate.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">PENGEMBALIAN BUKU</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <form role="form" method="post" action="pages/peminjaman/pengembalian_proses_proses.php">
              <div class="box-body">
              	<input type="hidden" class="form-control" name="id_pinjam" value="<?php echo $id_pinjam ?>">
                <input type="hidden" class="form-control" name="id_anggota" value="<?php echo $id_anggota ?>">
              	<div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="kd_buku">Kode Buku</label>
                  <input type="text" class="form-control" name="kd_buku" value="<?php echo $kd_buku ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="tgl_pinjam">Tanggal Pinjam</label>
                  <input type="text" class="form-control" name="tgl_pinjam" value="<?php echo $tgl_pinjam?>" readonly>
                </div>
                <div class="form-group">
                  <label for="tgl_kembali">Tanggal Kembali</label>
                  <input type="text" class="form-control" name="tgl_kembali" value="<?php echo $tgl_kembali ?>" readonly>
                </div>
              	<div class="form-group">
                  <label for="keterangan_buku">Keterangan Buku</label>
                  <input type="text" class="form-control" name="keterangan_buku" value="<?php echo $keterangan_buku ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="denda_telat">Denda Telat</label>
                  <input type="text" class="form-control" name="denda_telat" value="<?php echo $denda_telat ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="denda_buku">Denda Buku</label>
                  <input type="text" class="form-control" name="denda_buku" value="<?php echo $denda_buku ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="total_denda">Total Denda</label>
                  <input type="text" class="form-control" name="total_denda" value="<?php echo $total_denda ?>" readonly>
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>