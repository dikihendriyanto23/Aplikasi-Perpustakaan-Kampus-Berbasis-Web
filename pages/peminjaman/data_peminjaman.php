<div class="content-wrapper">
  <section class="content-header">
    <h1>
    DATA PEMINJAMAN
    </h1>
    <ol class="breadcrumb">
      <li><a href="pagetemplate.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">DATA PEMINJAMAN</li>
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
                <th style="text-align: center;">ID Peminjaman</th>
                <th style="text-align: center;">ID Anggota</th>
                <th style="text-align: center;">Nama Peminjam</th>
                <th style="text-align: center;">Kode Buku</th>
                <th style="text-align: center;">Judul Buku</th>
                <th style="text-align: center;">Tanggal Pinjam</th>
                <th style="text-align: center;">Status Buku</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>

              <?php
              include "config/koneksi.php";
              $no=0;
              $data=mysqli_query($koneksi,"SELECT * FROM peminjaman JOIN buku USING (kd_buku) JOIN anggota on(peminjaman.id_anggota=anggota.id_anggota) WHERE status_buku = 'Pinjam'") or die(mysqli_error($koneksi));
              while($baris = mysqli_fetch_array($data)){  
              ?>

              <tr>
                <td style="text-align: center;"><?php echo $no=$no+1;?></td>
                <td style="text-align: center;"><?php echo $baris['id_pinjam'] ?></td>
                <td style="text-align: center;"><?php echo $baris['id_anggota'] ?></td>
                <td style="text-align: center;"><?php echo $baris['nama'] ?></td>
                <td style="text-align: center;"><?php echo $baris['kd_buku'] ?></td>
                <td style="text-align: center;"><?php echo $baris['judul_buku'] ?></td>
                <td style="text-align: center;"><?php echo $baris['tgl_pinjam'] ?></td>
                <td style="text-align: center;"><?php echo $baris['status_buku'] ?></td>
                <td>
                  <a href="pagetemplate.php?page=pengembalian&id_pinjam=<?=$baris['id_pinjam'];?>" class="btn btn-danger">Pengembalian</a>
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