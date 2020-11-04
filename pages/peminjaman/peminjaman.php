<?php 
include 'config/koneksi.php';

$query=mysqli_query($koneksi,"SELECT max(id_pinjam) as kode from peminjaman") or die(mysql_error($koneksi));
$data=mysqli_fetch_array($query);
$kode=substr($data['kode'],1,4);

$tambah=$kode+1;
  if ($tambah<10) {
    $id_pinjam="P000".$tambah;
  }else{
    $id_pinjam="P00".$tambah;
  }

 ?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
    PEMINJAMAN BUKU
    </h1>
    <ol class="breadcrumb">
      <li><a href="pagetemplate.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">PEMINJAMAN BUKU</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <form role="form" method="post" action="pages/peminjaman/peminjaman_proses.php">
            <div class="box-body">
              <div class="form-group">
                <label>ID Peminjaman</label>
                <input type="text" class="form-control" name="id_pinjam" value="<?php echo $id_pinjam; ?>" readonly><span><p>*ID Peminjaman akan terisi secara otomatis</p></span>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <select id="kd_desa" class="form-control" name="id_anggota">
                  <?php 
                  $sql = mysqli_query($koneksi,"SELECT * FROM anggota");
                  while ($result = mysqli_fetch_array($sql)) {
                  ?>
                  <option value="<?php echo $result['id_anggota'] ?>"><?php echo $result['nama'] ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label for="kd_buku">Judul Buku</label>
                <select id="kd_desaa" class="form-control" name="kd_buku">
                  <?php 
                  $sql = mysqli_query($koneksi,"SELECT * FROM buku");
                  while ($result = mysqli_fetch_array($sql)) {
                  ?>
                  <option value="<?php echo $result['kd_buku'] ?>"><?php echo $result['judul_buku'] ?></option>
                  <?php } ?>
                </select>
              </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>