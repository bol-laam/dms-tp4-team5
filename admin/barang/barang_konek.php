<?php

	
// memanggil koneksi database

include_once "../../class/config.php";
include_once "../../class/barang.php";

	$d1 = new database();
	$conn = $d1->koneksidatabase();
	
	$BarangList = new barang($conn);
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();
	
	$i=1;
		
?>