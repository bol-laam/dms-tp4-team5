<?php
	include "../../class/config.php";
	include "../../class/pegawai.php";
	
	if (isset($_GET['id']));
	{
		$d1 = new database ();
		$conn = $d1->koneksidatabase();
		
		$PegawaiDelete = new pegawai($conn);
		$PegawaiDelete->PegawaiDelete($_GET['id']);
		
		header ("location:index.php");
	}
?>