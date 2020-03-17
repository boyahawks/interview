<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){

		$idTeam = $_POST['idTeam'];
		$strTeam = $_POST['strTeam'];
		$strTeamShort = $_POST['strTeamShort'];
		$strStadium = $_POST['strStadium'];


		require_once('setting_server.php');

		$sql = "UPDATE favorit SET strTeam = '$strTeam', strTeamShort = '$strTeamShort', strStadium = '$strStadium', WHERE idTeam = $idTeam;";

		if(mysqli_query($con,$sql)) {
				echo "favorit Berhasil diupdate";
				} else {
				echo 'Maaf favorit Gagal dilakukan!';
				}

		mysqli_close($con);
	}