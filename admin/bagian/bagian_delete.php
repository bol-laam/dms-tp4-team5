<?php
	include "../../class/config.php";
	include "../../class/bagian.php";
	
	if (isset($_GET['id']));
	{
		$d1 = new database ();
		$d1->koneksidatabase();
		
		$BagianDelete = new bagian();
		$BagianDelete->BagianDelete($_GET['id']);
		
		header ("location:index.php");
	}
?>