<?php


// memanggil koneksi database

include "../class/config.php";
include "../class/pemesanan.php";
include "../class/barang.php";
//include "../class/pegawai.php";

	
	$d1 = new database();
	$conn = $d1->koneksidatabase();
	
	$PesananList = new pemesanan ($conn);
	$PesananList->PesananList();
	$DaftarPesanan = $PesananList->PesananList();
		
	$BarangList = new barang($conn);
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();
	
?>