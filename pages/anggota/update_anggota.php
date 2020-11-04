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
        $id_anggota=$_GET['id_anggota'];
        $data=mysqli_query($koneksi,"SELECT * FROM anggota WHERE id_anggota='$id_anggota' ") or die(mysqli_error($koneksi));
        $baris=mysqli_fetch_array($data);
       ?>
      <div class="col-md-12">
        <div class="box box-primary">
          <form role="form" method="post" action="pages/anggota/update_anggota_proses.php?id_anggota=<?php echo $id_anggota ?>">
            <div class="box-body">
              <div class="form-group">
                <label for="id_anggota">ID Anggota</label>
                <input type="text" class="form-control" name="id_anggota" placeholder="ID Anggota" value="<?php echo $baris['id_anggota'] ?>">
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $baris['nama'] ?>">
              </div>
              <div class="form-group">
                <label for="npm">NPM</label>
                <input type="number" class="form-control" name="npm" placeholder="NPM" value="<?php echo $baris['npm'] ?>">
              </div>
              <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $baris['tgl_lahir'] ?>">
              </div>
              <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="number" class="form-control" name="no_hp" placeholder="No HP" value="<?php echo $baris['no_hp'] ?>">
              </div>
              <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select class="form-control" name="jk" value="<?php echo $baris['jk'] ?>">
                  <option value="">-Pilih Jenis Kelamin</option>
                  <option value="Laki-laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="thn_angkatan">Tahun Angkatan</label>
                <select class="form-control" name="thn_angkatan" value="<?php echo $baris['thn_angkatan'] ?>">
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
                <input type="text" class="form-control" name="prodi" placeholder="Program Studi" value="<?php echo $baris['prodi'] ?>">
              </div>
              <div class="form-group">
                <label for="fakultas">Fakultas</label>
                <input type="text" class="form-control" name="fakultas" placeholder="Fakultas" value="<?php echo $baris['fakultas'] ?>">
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