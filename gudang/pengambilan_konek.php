<?php
	include "../class/config.php";
	include "../class/barang.php";
	include "../class/pengambilan.php";
	
	$d1 = new database();
	$conn = $d1->koneksidatabase();
	
	$BarangList = new barang($conn);
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();
	
	$AmbilBarangList = new pengambilan($conn);
	$AmbilBarangList->AmbilBarangList();
	$DaftarPengambilan = $AmbilBarangList->AmbilBarangList();

?>