<?php
	
// memanggil koneksi database

include "../../class/config.php";
include "../../class/pegawai.php";
include "../../class/bagian.php";

	$d1 = new database();
	$conn = $d1->koneksidatabase();
	
	$PegawaiList = new pegawai($conn);
	$PegawaiList->PegawaiList();
	$DaftarPegawai = $PegawaiList->PegawaiList();
	
	$i=1;
	
	$BagianList = new bagian($conn);
	$PegawaiList->PegawaiList();
	$DaftarBagian = $BagianList->BagianList();

		
?>