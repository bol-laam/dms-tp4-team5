<?php
	include_once "../class/config.php";
	include "../class/barang.php";
	include "../class/pengambilan.php";
	include "../class/produksi.php";
	
	$d1 = new database();
	$conn = $d1->koneksidatabase();
	
	$StokBarang = new barang($conn);
	$StokBarang->StokBarang();
	$DataStok = $StokBarang->StokBarang();
	
?>