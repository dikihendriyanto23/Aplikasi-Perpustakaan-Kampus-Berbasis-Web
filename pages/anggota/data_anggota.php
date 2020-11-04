  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      DATA ANGGOTA
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA ANGGOTA</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="pagetemplate.php?page=tambah_anggota" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="buku" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="text-align: center;">No</th>
                  <th>ID Anggota</th>
                  <th>Nama</th>
                  <th>NPM</th>
                  <th>Tanggal Lahir</th>
                  <th>No HP</th>
                  <th>Jenis Kelamin</th>
                  <th style="text-align: center;">Tahun Angkatan</th>
                  <th>Program Studi</th>
                  <th>Fakultas</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include "config/koneksi.php";
                $no=0;
                $data=mysqli_query($koneksi,"SELECT * FROM anggota") or die(mysqli_error($koneksi));
                while($baris = mysqli_fetch_array($data)){  
                ?>

                <tr>
                  <td style="text-align: center;"><?php echo $no=$no+1;?></td>
                  <td><?php echo $baris['id_anggota'] ?></td>
                  <td><?php echo $baris['nama'] ?></td>
                  <td><?php echo $baris['npm'] ?></td>
                  <td><?php echo $baris['tgl_lahir'] ?></td>
                  <td><?php echo $baris['no_hp'] ?></td>
                  <td><?php echo $baris['jk'] ?></td>
                  <td style="text-align: center;"><?php echo $baris['thn_angkatan'] ?></td>
                  <td><?php echo $baris['prodi'] ?></td>
                  <td><?php echo $baris['fakultas'] ?></td>
                  <td>
                    <a href="pagetemplate.php?page=update_anggota&id_anggota=<?=$baris['id_anggota'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="pages/anggota/hapus_anggota.php?id_anggota=<?=$baris['id_anggota'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                    <a href="pages/anggota/cetakkartu.php?id_anggota=<?=$baris['id_anggota'];?>" class="btn btn-primary" role="button" title="Cetak Kartu"><i class="glyphicon glyphicon-print"></i></a>
                  </td>
                </tr>

                <?php } ?>

                </tbody>
              </table><br>
              <p>*Untuk mencetak kartu anggota silahkan klik tombol print di kolom aksi</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#anggota').DataTable();
  });
</script>