<?php
	include "../../class/config.php";
	include "../../class/pegawai.php";
	
	if (isset($_GET['id']));
	{
		$d1 = new database ();
		$d1->koneksidatabase();
		
		$PegawaiDelete = new pegawai();
		$PegawaiDelete->PegawaiDelete($_GET['id']);
		
		header ("location:index.php");
	}
?>