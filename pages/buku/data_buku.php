  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      DATA BUKU
      </h1>
      <ol class="breadcrumb">
        <li><a href="pagetemplate.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA BUKU</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="pagetemplate.php?page=tambah_buku" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="buku" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Buku</th>
                  <th>ISBN</th>
                  <th>Judul Buku</th>
                  <th>Tahun</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                  <th style="text-align: center;">Jumlah Buku</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include "config/koneksi.php";
                $no=0;
                $data=mysqli_query($koneksi,"SELECT * FROM buku") or die(mysqli_error($koneksi));
                while($baris = mysqli_fetch_array($data)){  
                ?>

                <tr>
                  <td style="text-align: center;"><?php echo $no=$no+1;?></td>
                  <td><?php echo $baris['kd_buku'] ?></td>
                  <td><?php echo $baris['isbn'] ?></td>
                  <td><?php echo $baris['judul_buku'] ?></td>
                  <td><?php echo $baris['tahun'] ?></td>
                  <td><?php echo $baris['pengarang'] ?></td>
                  <td><?php echo $baris['penerbit'] ?></td>
                  <td style="text-align: center;"><?php echo $baris['jumlah_buku'] ?></td>
                  <td>
                    <a href="pagetemplate.php?page=update_buku&kd_buku=<?=$baris['kd_buku'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"> Update</i></a>
                    <a href="pages/buku/hapus_buku.php?kd_buku=<?=$baris['kd_buku'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"> Hapus</i></a>
                  </td>
                </tr>

                <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#buku').DataTable();
  });
</script>