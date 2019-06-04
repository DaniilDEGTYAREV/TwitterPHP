<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'danya_pn_11');
$query = mysqli_query($connect, "INSERT INTO tweet (post_text, account_name, account_link, account_image, post_image) VALUES ('" . $_POST['post_text'] . "', 'The New York Times', '@nytimes', 'images/acc_image.jpg', 'images/city.jpg')");
header("Location: http://twiterdanka/index1.php"); ?>