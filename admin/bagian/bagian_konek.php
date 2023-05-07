<?php

// memanggil koneksi database

include_once "../../class/config.php";
include_once "../../class/bagian.php";

	$d1 = new database();
	$conn = $d1->koneksidatabase();
	
	$BagianList = new bagian($conn);
	$BagianList->BagianList();
	$DaftarBagian = $BagianList->BagianList();
	
	$i=1;
		
?>