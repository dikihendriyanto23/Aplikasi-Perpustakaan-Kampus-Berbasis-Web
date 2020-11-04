<div class="content-wrapper">
  <section class="content-header">
    <h1>
    UPDATE BUKU
    </h1>
    <ol class="breadcrumb">
      <li><a href="pagetemplate.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">UPDATE BUKU</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <?php 
        include 'config/koneksi.php';
        $kd_buku=$_GET['kd_buku'];
        $data=mysqli_query($koneksi,"SELECT * FROM buku WHERE kd_buku='$kd_buku' ") or die(mysqli_error($koneksi));
        $baris=mysqli_fetch_array($data);
       ?>
      <div class="col-md-12">
        <div class="box box-primary">
          <form role="form" method="post" action="pages/buku/update_buku_proses.php?kd_buku=<?php echo $kd_buku ?>">
            <div class="box-body">
              <div class="form-group">
                <label for="kd_buku">Kode Buku</label>
                <input type="text" class="form-control" name="kd_buku" placeholder="Kode Buku" value="<?php echo $baris['kd_buku'] ?>">
              </div>
              <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" name="isbn" placeholder="ISBN" value="<?php echo $baris['isbn'] ?>">
              </div>
              <div class="form-group">
                <label for="judul_buku">Judul Buku</label>
                <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku" value="<?php echo $baris['judul_buku'] ?>">
              </div>
              <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="number" class="form-control" name="tahun" placeholder="Tahun" value="<?php echo $baris['tahun'] ?>">
              </div>
              <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" class="form-control" name="pengarang" placeholder="Pengarang" value="<?php echo $baris['pengarang'] ?>">
              </div>
              <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" placeholder="Penerbit" value="<?php echo $baris['penerbit'] ?>">
              </div>
              <div class="form-group">
                <label for="jumlah_buku">Jumlah Buku</label>
                <input type="number" class="form-control" name="jumlah_buku" placeholder="Jumlah Buku" value="<?php echo $baris['jumlah_buku'] ?>">
              </div>
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