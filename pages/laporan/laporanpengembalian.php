<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="assets/jquery-3.4.1.js"></script>
  <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
  <script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
</head>
<body>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
      LAPORAN PENGEMBALIAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="pagetemplate.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">LAPORAN PENGEMBALIAN</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">

      
      <form action="pagetemplate.php?page=laporan" method="post">
        <div class="form-group">
            <label>Tanggal Awal</label>
            <div class="input-group date">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                <input id="tgl_mulai" placeholder="Masukkan Tanggal Awal" type="text" class="form-control datepicker" name="tgl_awal"  value="<?php if (isset($_POST['tgl_awal'])) echo $_POST['tgl_awal'];?>" >
            </div>
        </div>
        <div class="form-group">
            <label>Tanggal Akhir</label>
            <div class="input-group date">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
                <input id="tgl_akhir" placeholder="Masukkan Tanggal Akhir" type="text" class="form-control datepicker" name="tgl_akhir" value="<?php if (isset($_POST['tgl_akhir'])) echo $_POST['tgl_akhir'];?>">
            </div>
        </div>

        <script type="text/javascript">
            $(function(){
                $(".datepicker").datepicker({
                    format: 'dd-mm-yyyy',
                    autoclose: true,
                    todayHighlight: false,
                });
                $("#tgl_mulai").on('changeDate', function(selected) {
                    var startDate = new Date(selected.date.valueOf());
                    $("#tgl_akhir").datepicker('setStartDate', startDate);
                    if($("#tgl_mulai").val() > $("#tgl_akhir").val()){
                        $("#tgl_akhir").val($("#tgl_mulai").val());
                    }
                });
            });
        </script>

    <div class="form-group">
        <input type="submit" class="btn btn-info" value="Cari" name="cari">
    </div>
    </form>

      <div class="box box-primary">
        <div class="box-header">
          </div>
            <div class="box-body table-responsive">
              <table id="buku" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">ID Peminjaman</th>
                  <th style="text-align: center;">Nama Peminjam</th>
                  <th style="text-align: center;">Kode Buku</th>
                  <th style="text-align: center;">Judul Buku</th>
                  <th style="text-align: center;">Tanggal Pinjam</th>
                  <th style="text-align: center;">Tanggal Kembali</th>
                  <th style="text-align: center;">Keterangan Buku</th>
                  <th style="text-align: center;">Total Denda</th>
                  <th style="text-align: center;">Status Buku</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include "config/koneksi.php";

                $no=0;

                if (isset($_POST['tgl_awal']) && isset($_POST['tgl_akhir'])) {
                  
                    $tgl_awal=date('Y-m-d', strtotime($_POST["tgl_awal"]));
                    $tgl_akhir=date('Y-m-d', strtotime($_POST["tgl_akhir"]));

                    $data=mysqli_query($koneksi,"SELECT * FROM peminjaman JOIN buku USING (kd_buku) JOIN anggota on(peminjaman.id_anggota=anggota.id_anggota) WHERE tgl_pinjam between '$tgl_awal' and '$tgl_akhir' and status_buku='Kembali'") or die(mysqli_error($koneksi));
                }else{
                    $data=mysqli_query($koneksi,"SELECT * FROM PEMINJAMAN JOIN buku USING (kd_buku) JOIN anggota on(peminjaman.id_anggota=anggota.id_anggota) WHERE status_buku='Kembali'") or die(mysqli_error($koneksi));
                }
                
               
                while($baris = mysqli_fetch_array($data)){  
                ?>

                <tr>
                  <td style="text-align: center;"><?php echo $no=$no+1;?></td>
                  <td style="text-align: center;"><?php echo $baris['id_pinjam'] ?></td>
                  <td style="text-align: center;"><?php echo $baris['nama'] ?></td>
                  <td style="text-align: center;"><?php echo $baris['kd_buku'] ?></td>
                  <td style="text-align: center;"><?php echo $baris['judul_buku'] ?></td>
                  <td style="text-align: center;"><?php echo $baris['tgl_pinjam'] ?></td>
                  <td style="text-align: center;"><?php echo $baris['tgl_kembali'] ?></td>
                  <td style="text-align: center;"><?php echo $baris['keterangan_buku'] ?></td>
                  <td style="text-align: center;"><?php echo $baris['total_denda'] ?></td>
                  <td style="text-align: center;"><?php echo $baris['status_buku'] ?></td>
                </tr>
                <?php } ?>

                </tbody>
              </table><br>
              <a href="pages/laporan/cetaklaporan.php?tgl_awal=<?php echo $tgl_awal ?>&tgl_akhir=<?php echo $tgl_akhir ?>" class="btn btn-primary" role="button" title="Cetak Laporan"><i class="glyphicon glyphicon-print"></i> Cetak Laporan</a>
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


</body>
</html>