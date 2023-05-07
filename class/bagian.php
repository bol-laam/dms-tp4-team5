<?php
	class bagian
	{
		private $id_bagian;
		private $nama_bagian;
		private $conn;

		function __construct($conn) {
			$this->conn = $conn;
		}

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
			return $this->id_bagian;
		}

		function getNama_Bagian ()
		{
			return $this->nama_bagian;
		}

		function AddBagian ()
		{
			$sqlAddBagian = $this->conn->query("INSERT INTO bagian(nama_bagian) VALUES('$this->nama_bagian')");
		}

		function BagianList ()
		{
			$sqlBagianList = $this->conn->query("SELECT * FROM bagian ORDER BY nama_bagian ASC");
			while ($row = $sqlBagianList->fetch_assoc())
			{
				$data [] = $row;
			}
			return $data;
		}

		function findBagianById ($id)
		{
			$sqlEditBagian = $this->conn->query("SELECT * FROM bagian WHERE id_bagian = '$id'");
			while ($row = $sqlEditBagian->fetch_assoc())
			{
				$data[] = $row;
			}
			return $data;         
		}

		function BagianUpdate ()
		{
			$sqlBagianUpdate = $this->conn->query("UPDATE bagian SET nama_bagian ='$this->nama_bagian' WHERE id_bagian = '$this->id_bagian'");
		}

		function BagianDelete ($id)
		{
			$sqlBagianDelete = $this->conn->query("DELETE FROM bagian WHERE id_bagian = '$id'");
		}
	}
?>
