<?php
	
	class user
	{
		private $username;
		private $password;
		function setUsername($username)
		{
			$this->username = $username;
		}
		function setPassword($password)
		{
			$this->password = $password;
		}

		function Authentication()
		{
			$sql = mysql_query("SELECT * FROM pegawai where username='$this->username' and password='$this->password'");

			if(mysql_num_rows($sql) > 0){
				while ($row = mysql_fetch_array ($sql))
				{
					$data [] = $row;
				}
				return $data;
			}
		}

		public static function cekLogin()
		{
			$logged_in = false;
			//jika session username belum dibuat, atau session username kosong
			if (!isset($_SESSION) || empty($_SESSION)) {	
				//redirect ke halaman login
				header("Location:../index.php");
			} else {
				$logged_in = true;
			}
		}

	}

?>