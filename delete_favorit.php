<?php
	$id = $_GET['id'];

	require_once('setting_server.php');

	$sql = "DELETE FROM favorit WHERE idTeam=$idTeam;";

	if(mysqli_query($con,$sql)){
		echo 'Data favorit Berhasil dihapus';
	}else{
		echo 'oops! Mohon coba lagi!';
	}

	mysqli_close($con);