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
    	<?php 
	include "config/koneksi.php";
	$id_pinjam=$_GET['id_pinjam'];
	$query = mysqli_query($koneksi,"SELECT * FROM peminjaman INNER JOIN anggota on (peminjaman.id_anggota = anggota.id_anggota) WHERE id_pinjam = '$id_pinjam'") or die(mysqli_error($koneksi));
	$data=mysqli_fetch_array($query);
	 ?>
      <div class="col-md-12">
        <div class="box box-primary">
          <form role="form" method="post" action="pagetemplate.php?page=pengembalian_proses&id_pinjam=<?php echo $id_pinjam ?>">
            <div class="box-body">
            	<input type="hidden" class="form-control" name="id_pinjam" value="<?php echo $id_pinjam ?>">
              <input type="hidden" class="form-control" name="tgl_pinjam" value="<?php echo $data['tgl_pinjam'] ?>">
              <input type="hidden" class="form-control" name="id_anggota" value="<?php echo $data['id_anggota'] ?>">
            	<div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>" readonly>
              </div>
              <div class="form-group">
                <label for="kd_buku">Kode Buku</label>
                <input type="text" class="form-control" name="kd_buku" value="<?php echo $data['kd_buku'] ?>" readonly>
              </div>
            	<div class="form-group">
                <label for="keterangan_buku">Keterangan Buku</label>
                <select id="keterangan_buku" class="form-control" name="keterangan_buku">
                  <option value="Tidak Ada">Tidak Ada</option>
                  <option value="Rusak">Rusak</option>
                  <option value="Hilang">Hilang</option>
                </select>
              </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              <button type="reset" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-refresh"></i> Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>