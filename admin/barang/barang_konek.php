<?php

	
// memanggil koneksi database

include "../../class/config.php";
include "../../class/barang.php";

	$d1 = new database();
	$d1->koneksidatabase();
	
	$BarangList = new barang();
	$BarangList->BarangList();
	$DaftarBarang = $BarangList->BarangList();
	
	$i=1;
		
?>