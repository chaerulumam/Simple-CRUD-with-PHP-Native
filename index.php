<?php 

// connections to db
require 'connections.php';
require 'functions.php';

// get data from "player" table / query
$player = query("SELECT * FROM player");

// the condition when error occurs
// in connections
// if (!$result) {
// 	echo mysqli_error($conn);
// }


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Page</title>
</head>
<body>

	<!-- Create Table -->
	<h1>Football Player List</h1>

	<a href="create.php">Add Football Player</a>
	<br>
	<br>

	<table border="1" cellpadding="10" cellspacing="0">

		<tr>
			<th>No.</th>
			<th>Action</th>
			<th>Picture</th>
			<th>Player Name</th>
			<th>Club</th>
			<th>Country</th>
		</tr>

		<!-- Looping -->
		<?php $i = 1; ?>
		<?php foreach( $player as $row ) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="edit.php?id=<?= $row["id"]; ?>">edit</a> |
				<a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Are you sure?');" >delete</a>
			</td>
			<td><img src="img/<?= $row["player_picture"]; ?>" width="60"></td>
			<td><?= $row["player_name"]; ?></td>
			<td><?= $row["player_club"]; ?></td>
			<td><?= $row["player_country"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</body>
</html>