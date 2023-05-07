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
			$conn = new mysqli("localhost", "root", "", "eoq");

			// check connection error
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM pegawai WHERE username = ? AND password = MD5(?)";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ss", $this->username, $this->password);
			$stmt->execute();
			$result = $stmt->get_result();

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
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