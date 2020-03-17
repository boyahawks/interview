<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

		$favorit = $_POST['favorit'];

				$sql = "INSERT INTO favorit (favorit) VALUES ('$favorit')";

				require_once('setting_server');

				if(mysqli_query($con,$sql)) {
				echo 'favorit Perpustakaan sukses ditampilkan';
				} else {
				echo 'Maaf favorit Gagal ditampilkan!';
				}

		mysqli_close($con);
	}