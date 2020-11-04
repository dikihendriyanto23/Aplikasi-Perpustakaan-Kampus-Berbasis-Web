<div class="content-wrapper">
  <section class="content-header">
    <h1>
    DATA PENGEMBALIAN
    </h1>
    <ol class="breadcrumb">
      <li><a href="pagetemplate.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">DATA PENGEMBALIAN</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
    <div class="box box-primary">
      <div class="box-header">
        </div>
          <div class="box-body table-responsive">
            <table id="buku" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th style="text-align: center;">No</th>
                <th>Nama Anggota</th>
                <th>Kode Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Telat</th>
                <th>Keterangan Buku</th>
                <th>Denda Telat</th>
                <th>Denda Buku</th>
                <th>Total Denda</th>
                <th>Status Buku</th>
                <th style="text-align: center;">Aksi</th>
              </tr>
              </thead>
              <tbody>

              <?php
              include "config/koneksi.php";
              $no=0;
              $data=mysqli_query($koneksi,"SELECT * FROM peminjaman INNER JOIN anggota on(peminjaman.id_anggota=anggota.id_anggota) WHERE status_buku = 'Kembali'") or die(mysqli_error($koneksi));
              while($baris = mysqli_fetch_array($data)){  
              ?>

              <tr>
                <td style="text-align: center;"><?php echo $no=$no+1;?></td>
                <td><?php echo $baris['nama'] ?></td>
                <td><?php echo $baris['kd_buku'] ?></td>
                <td><?php echo $baris['tgl_pinjam'] ?></td>
                <td><?php echo $baris['tgl_kembali'] ?></td>
                <td><?php echo $baris['telat'] ?></td>
                <td><?php echo $baris['keterangan_buku'] ?></td>
                <td><?php echo $baris['denda_telat'] ?></td>
                <td><?php echo $baris['denda_buku'] ?></td>
                <td><?php echo $baris['total_denda'] ?></td>
                <td><?php echo $baris['status_buku'] ?></td>
                <td>
                  <a href="pages/peminjaman/hapus_pengembalian.php?id_pinjam=<?=$baris['id_pinjam'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"> Hapus</i></a>
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
    $('#anggota').DataTable();
  });
</script>