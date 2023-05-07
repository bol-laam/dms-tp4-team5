<?php
	class bagian
	{
		private $id_bagian;
		private $nama_bagian;
		
		function setId_Bagian ($id_bagian)
		{
			$this->id_bagian = $id_bagian;
		}
		function setNama_Bagian ($nama_bagian)
		{
			$this->nama_bagian = $nama_bagian;
		}
		function getId_Bagian ()
		{
			return $id_bagian;
		}
		function getNama_Bagian ()
		{
			return $nama_bagian;
		}
		function AddBagian ()
		{
			$sqlAddBagian = mysql_query ("INSERT INTO bagian VALUES ('$this->id_bagian','$this->nama_bagian')");
		}
		function BagianList ()
		{
			$sqlBagianList = mysql_query ("SELECT * FROM bagian ORDER BY nama_bagian ASC");
			while ($row = mysql_fetch_array ($sqlBagianList))
			{
				$data [] = $row;
			}
			return $data;
		}
		function findBagianById ($id)
		{
			$sqlEditBagian = mysql_query ("SELECT * FROM bagian WHERE id_bagian = '$id'");
			while ($row = mysql_fetch_array ($sqlEditBagian))
			{
				$data[] = $row;
			}
			return $data;			
		}
		function BagianUpdate ()
		{
			$sqlBagianUpdate = mysql_query ("UPDATE bagian SET nama_bagian ='$this->nama_bagian' WHERE id_bagian = '$this->id_bagian'");
		}
		function BagianDelete ($id)
		{
			$sqlBagianDelete = mysql_query ("DELETE FROM bagian WHERE id_bagian = '$id'");
		}
	}


?>