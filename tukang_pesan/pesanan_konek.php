<?php


// memanggil koneksi database

include "../class/config.php";
include "../class/pemesanan.php";
include "../class/barang.php";
//include "../class/pegawai.php";

	
	$d1 = new database();
	$d1->koneksidatabase();
	
	$PesananList = new pemesanan ();
	$PesananList->PesananList();
	$DaftarPesanan = $PesananList->PesananList();
		
	$BarangList = new barang();
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();
	
?>