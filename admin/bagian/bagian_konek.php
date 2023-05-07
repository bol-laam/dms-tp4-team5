<?php

// memanggil koneksi database

include "../../class/config.php";
include "../../class/bagian.php";

	$d1 = new database();
	$d1->koneksidatabase();
	
	$BagianList = new bagian();
	$BagianList->BagianList();
	$DaftarBagian = $BagianList->BagianList();
	
	$i=1;
		
?>