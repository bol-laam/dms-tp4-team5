<?php
	include "../../class/config.php";
	include "../../class/bagian.php";
	
	if (isset($_GET['id']));
	{
		$d1 = new database ();
		$conn = $d1->koneksidatabase();
		
		$BagianDelete = new bagian($conn);
		$BagianDelete->BagianDelete($_GET['id']);
		
		header ("location:index.php");
	}
?>