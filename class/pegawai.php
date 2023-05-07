<?php
	class pegawai
	{
		private $id_pegawai;
		private $username;
		private $password;
		private $nama_pegawai;		
		private $alamat_pegawai;
		private $hp_pegawai;
		private $id_bagian;
		
		private $conn;

		function __construct($conn) {
			$this->conn = $conn;
		}

		function setId_Pegawai ($id_pegawai)
		{
			$this->id_pegawai = $id_pegawai;
		}
		function setUsername ($username)
		{
			$this->username = $username;
		}
		function setPassword ($password)
		{
			$this->password = $password;			
		}
		function setNama_Pegawai ($nama_pegawai)
		{
			$this->nama_pegawai = $nama_pegawai;
		}
		function setAlamat_Pegawai ($alamat_pegawai)
		{
			$this->alamat_pegawai = $alamat_pegawai;
		}
		function setHp_Pegawai ($hp_pegawai)
		{
			$this->hp_pegawai = $hp_pegawai;
		}		
		function setId_Bagian ($id_bagian)
		{
			$this->id_bagian = $id_bagian;
		}
		function getId_Pegawai ()
		{
			return $id_pegawai;
		}
		function getUsername ()
		{
			return $username;
		}
		function getPassword ()
		{
			return $password;
		}
		function getNama_Pegawai ()
		{
			return $nama_pegawai;
		}
		function getAlamat_Pegawai ()
		{
			return $alamat_pegawai;
		}
		function getHp_Pegawai ()
		{
			return $hp_pegawai;
		}
		function getId_bagian ()
		{
			return $id_bagian;
		}
		function AddPegawai ()
		{
			$sqlAddPegawai = $this->conn->query("INSERT INTO `pegawai`(`username`, `password`, `nama_pegawai`, `alamat_pegawai`, `hp_pegawai`, `id_bagian`) VALUES ('$this->username', '$this->password', '$this->nama_pegawai', '$this->alamat_pegawai', '$this->hp_pegawai', '$this->id_bagian')");
		}
		function PegawaiList ()
		{
			$sqlPegawaiList = $this->conn->query("SELECT id_pegawai, username, password, nama_pegawai, alamat_pegawai, hp_pegawai, nama_bagian FROM pegawai NATURAL JOIN bagian ORDER BY nama_pegawai ASC ");
			while ($row = $sqlPegawaiList->fetch_assoc())
			{
				$data [] = $row;
			}
			return $data;
		}
		function findPegawaiById ($id)
		{
			$sqlEditPegawai = $this->conn->query("SELECT * FROM pegawai WHERE id_pegawai = '$id'");
			while ($row = $sqlEditPegawai->fetch_assoc())
			{
				$data[] = $row;
			}
			return $data;			
		}
		function PegawaiUpdate ()
		{
			$sqlPegawaiUpdate = $this->conn->query("UPDATE pegawai SET username = '$this->username', password = '$this->password', nama_pegawai ='$this->nama_pegawai', alamat_pegawai = '$this->alamat_pegawai', hp_pegawai = '$this->hp_pegawai', id_bagian = '$this->id_bagian' WHERE id_pegawai = '$this->id_pegawai'");
		}
		function PegawaiDelete ($id)
		{
			$sqlPegawaiDelete = $this->conn->query("DELETE FROM pegawai WHERE id_pegawai = '$id'");
		}
		function Welcome ()
		{
			$sqlWelcome = $this->conn->query("SELECT nama_pegawai FROM pegawai");
		}		
	}

?>
