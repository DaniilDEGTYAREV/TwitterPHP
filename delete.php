<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'danya_pn_11');
	$query = mysqli_query($connect, "DELETE FROM tweet WHERE id='" . $_POST['id'] . "'");
	header("Location: http://twiterdanka/index1.php"); 
 ?>