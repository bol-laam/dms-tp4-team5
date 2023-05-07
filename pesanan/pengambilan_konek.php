<?php
	include "../class/config.php";
	include "../class/barang.php";
	include "../class/pengambilan.php";
	
	$d1 = new database();
	$d1->koneksidatabase();
	
	$BarangList = new barang();
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();
	
	$AmbilBarangList = new pengambilan();
	$AmbilBarangList->AmbilBarangList();
	$DaftarPengambilan = $AmbilBarangList->AmbilBarangList();

?>