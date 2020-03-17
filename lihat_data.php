<?php 

	require_once 'setting_server.php';

	$query = "SELECT * from favorit";
	$sql = mysqli_query($con, $query);
	$ray = array();
	while ($row = mysqli_fetch_array($sql) ){
		array_push($ray, array(
			"idTeam"=> $row['idTeam'],
			"strTeam"=> $row['strTeam'],
			"strTeamShort"=> $row['strTeamShort'],
			"strStadium"=> $row['strStadium']

		));
	}

	echo json_encode($ray);
	mysqli_close($con);


    

 ?>