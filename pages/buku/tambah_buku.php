<div class="content-wrapper">
  <section class="content-header">
    <h1>TAMBAH DATA BUKU</h1>
    <ol class="breadcrumb">
      <li><a href="pagetemplate.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">TAMBAH DATA BUKU</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <form role="form" method="post" action="pages/buku/tambah_buku_proses.php">
            <div class="box-body">
              <div class="form-group">
                <label for="kd_buku">Kode Buku</label>
                <input type="text" class="form-control" name="kd_buku" placeholder="Kode Buku" required>
              </div>
              <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" name="isbn" placeholder="ISBN" required>
              </div>
              <div class="form-group">
                <label for="judul_buku">Judul Buku</label>
                <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku" required>
              </div>
              <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="number" class="form-control" name="tahun" placeholder="Tahun" required>
              </div>
              <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" class="form-control" name="pengarang" placeholder="Pengarang" required>
              </div>
              <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" name="penerbit" placeholder="Penerbit" required>
              </div>
              <div class="form-group">
                <label for="jumlah_buku">Jumlah Buku</label>
                <input type="number" class="form-control" name="jumlah_buku" placeholder="Jumlah Buku" required>
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