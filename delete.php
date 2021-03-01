<?php 

require 'connections.php';
require 'functions.php';

$id = $_GET["id"];

if (delete ($id) > 0 ) {
	echo "
		<script>
			alert('delete successfully');
			document.location.href = 'index.php';
		</script>";
} else {
	echo "
		<script>
			alert('delete has not successfully');
			document.location.href = 'index.php';
		</script>";
}

 ?>