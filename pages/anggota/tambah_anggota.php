<div class="content-wrapper">
  <section class="content-header">
    <h1>
    TAMBAH ANGGOTA
    </h1>
    <ol class="breadcrumb">
      <li><a href="pagetemplate.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">TAMBAH ANGGOTA</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <form role="form" method="post" action="pages/anggota/tambah_anggota_proses.php">
            <div class="box-body">
              <div class="form-group">
                <label for="id_anggota">ID Anggota</label>
                <input type="text" class="form-control" name="id_anggota" placeholder="ID Anggota" required>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
              </div>
              <div class="form-group">
                <label for="npm">NPM</label>
                <input type="number" class="form-control" name="npm" placeholder="NPM" required>
              </div>
              <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" required>
              </div>
              <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="number" class="form-control" name="no_hp" placeholder="No HP" required>
              </div>
              <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select class="form-control" name="jk" required>
                  <option value="">-Pilih Jenis Kelamin</option>
                  <option value="Laki-laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="thn_angkatan">Tahun Angkatan</label>
                <select class="form-control" name="thn_angkatan" required>
                    <option value="">-Pilih Tahun Angkatan</option>
                    <?php
                    $thn_skr = date('Y');
                    for ($x = $thn_skr; $x >= 2015; $x--) {
                    ?>
                        <option value="<?php echo $x ?>"><?php echo $x ?></option>
                    <?php
                    }
                    ?>
                </select>
              </div>
              <div class="form-group">
                <label for="prodi">Program Studi</label>
                <input type="text" class="form-control" name="prodi" placeholder="Program Studi" required>
              </div>
              <div class="form-group">
                <label for="fakultas">Fakultas</label>
                <input type="text" class="form-control" name="fakultas" placeholder="Fakultas" required>
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