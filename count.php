<?php
	include 'dataBaseConnect.php';
	
	$id = (int)($_GET['id']);
	$sql = "UPDATE image SET count = count + 1 WHERE id = $id";
	mysqli_query($link, $sql);
	$sql = "SELECT count FROM image WHERE id = $id";
	$result = mysqli_query($link, $sql);
	echo mysqli_fetch_row($result)[0];
?>