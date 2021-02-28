<?php 
	
	function query ($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}

	// add / create new data
	function add ($data) {
		global $conn;
		// bikin variable lalu isinya sesuai dengan field di database
		$player_name = htmlspecialchars($data["player_name"]);
		$player_club = htmlspecialchars($data["player_club"]);
		$player_country = htmlspecialchars($data["player_country"]);
		$player_picture = htmlspecialchars($data["player_picture"]);

		// query database
		$query = "INSERT INTO player VALUES 
				('', '$player_name', '$player_club', '$player_country', '$player_picture')
				";

		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

	// edit
	function edit($data) {
		global $conn;

		$id = $data["id"];
		$player_name = htmlspecialchars($data["player_name"]);
		$player_club = htmlspecialchars($data["player_club"]);
		$player_country = htmlspecialchars($data["player_country"]);
		$player_picture = htmlspecialchars($data["player_picture"]);

		$query = "UPDATE player SET  
						player_name = '$player_name',
						player_club = '$player_club',
						player_country = '$player_country',
						player_picture = '$player_picture'
						WHERE id = $id
						"; 
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

	// delete
	function delete ($id) {
		global $conn;
		mysqli_query($conn, "DELETE FROM player WHERE id = $id");
		return mysqli_affected_rows($conn);
	}

 ?>