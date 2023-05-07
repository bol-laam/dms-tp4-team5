<?php
	include "../../class/config.php";
	include "../../class/barang.php";
	
	if (isset($_GET['id']));
	{
		$d1 = new database ();
		$d1->koneksidatabase();
		
		$BarangDelete = new barang();
		$BarangDelete->BarangDelete($_GET['id']);
		
		header ("location:index.php");
	}
?>