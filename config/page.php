<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
    case 'data_buku':
      include 'pages/buku/data_buku.php';
      break;
    case 'tambah_buku':
    	include 'pages/buku/tambah_buku.php';
    	break;
    case 'update_buku':
      include 'pages/buku/update_buku.php';
      break;
    case 'data_anggota':
      include 'pages/anggota/data_anggota.php';
      break;
    case 'tambah_anggota':
      include 'pages/anggota/tambah_anggota.php';
      break;
     case 'update_anggota':
      include 'pages/anggota/update_anggota.php';
      break;
    case 'peminjamanbuku':
      include 'pages/peminjaman/peminjaman.php';
      break;
    case 'data_peminjaman':
      include 'pages/peminjaman/data_peminjaman.php';
      break; 
    case 'data_pengembalian':
      include 'pages/peminjaman/data_pengembalian.php';
      break; 
    case 'pengembalian':
      include 'pages/peminjaman/pengembalian.php';
      break; 
    case 'pengembalian_proses':
      include 'pages/peminjaman/pengembalian_proses.php';
      break; 
    case 'laporan':
      include 'pages/laporan/laporanpengembalian.php';
      break;
    case 'pengaturan':
      include 'pages/pengaturan.php';
      break; 
  }
}else{
    include "pages/beranda.php";
  }
?>