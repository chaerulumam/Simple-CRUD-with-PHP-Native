<?php 	

require 'connections.php';
require 'functions.php';

// cek apakah tombol submit sudah di pencet atau belum
if (isset($_POST["submit"] ) ) {

	// alert untuk penanda apakah data berhasil di tambah
	if (add($_POST) > 0 ) {
		echo "<script>
				alert('data has succesfully created');
				document.location.href = 'index.php';
				</script>
				";
	} else {
		echo "<script>
				alert('data has not succesfully created');
				document.location.href = 'index.php';
				</script>
				";
	}
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create New Player</title>
</head>
<body>

	<h1>Create New Player</h1>

	<form action="" method="post">
		
		<ul>
			<li>
				<label for="player_name">Player Name: </label>
				<input type="text" name="player_name" id="player_name">
			</li>
			<br>	
			<li>
				<label for="player_club">Player Club: </label>
				<input type="text" name="player_club" id="player_club">
			</li>
			<br>
			<li>
				<label for="player_country">Player Country: </label>
				<input type="text" name="player_country" id="player_country">
			</li>
			<br>
			<li>
				<label for="player_picture">Picture: </label>
				<input type="file" name="player_picture" id="player_picture">
			</li>	
			<br>	
			<li>
				<button type="submit" name="submit">Add Data</button>
			</li>
		</ul>

	</form>
	
</body>
</html>