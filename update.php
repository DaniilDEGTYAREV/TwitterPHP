<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<form action="insert.php" method="POST">
		<? echo '<input name="post_text" value="' . $_POST['post_text'] . '">'; ?>
		<? echo '<input type="hidden" name="id" value="' . $_POST['id'] . '">'; ?>
		<button class="btn btn-primary">Редактировать</button>
	</form>

</body>
</html>