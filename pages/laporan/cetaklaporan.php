<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h1>LAPORAN PENGEMBALIAN</h1>
		<h1>PERPUSTAKAAN</h1>
	</center>

	<center>
	<br>
	<table border="2">
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
                include "../../config/koneksi.php";

                $no=0;

                if (isset($_POST['tgl_awal']) && isset($_POST['tgl_akhir'])) {
                  
                    $tgl_awal=date('Y-m-d', strtotime($_POST["tgl_awal"]));
                    $tgl_akhir=date('Y-m-d', strtotime($_POST["tgl_akhir"]));

                    $data=mysqli_query($koneksi,"SELECT * FROM peminjaman JOIN buku USING (kd_buku) JOIN anggota on(peminjaman.id_anggota=anggota.id_anggota) WHERE tgl_pinjam between '$tgl_awal' and '$tgl_akhir'") or die(mysqli_error($koneksi));
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
        </table>
    </center>

    <script>
		window.print();
	</script>
</body>
</html>