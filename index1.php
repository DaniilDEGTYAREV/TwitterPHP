<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<div class="container-fluid ">
		НАВИГАЦИЯ (container-fluid)
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-3 ">Левая колонка (col-3). <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
			
			<div class="col-6 ">
				<?php 
					$connect = mysqli_connect('127.0.0.1', 'root', '', 'danya_pn_11');
					$query = mysqli_query($connect, "SELECT * FROM tweet ORDER BY id DESC");
					?>
					<div> 
						<form action="insert.php" method="POST">
							<input type="" name="post_text">
							<button class="btn btn-primary">Добавить</button>
						</form>
					</div>
					
					<?php 
						for($i=0; $i<$query->num_rows; $i++){
							$lol = $query->fetch_assoc(); ?>
							<div class="row">	
								
									<div class="col-2">
										<?php echo '<img src="' . $lol['account_image'] . '" class="w-100 rounded-circle">'?>
									</div>
									<div class="col-10">
										<div class="row">	
											<h5><?php echo $lol['account_name']; ?></h5>
											<span><?php echo $lol['account_link']; ?></span>
										</div>
										<p><?php echo $lol['post_text']; ?></p>
										
										<div>
											<?php echo '<img src="' . $lol['post_image'] . '" class="w-100">' ?>
										</div>
										<div class="row">
											<div class="col-8">
												<form method="POST" action="delete.php">
													<? echo '<input type="hidden" name="id" value="' . $lol['id'] . '">'; ?>
													<button class="btn btn-primary">Удалить</button>
												</form>
											</div>
											<div class="col-2">
												<form method="POST" action="update.php">
													<? echo '<input type="hidden" name="id" value="' . $lol['id'] . '">'; ?>
													<? echo '<input type="hidden" name="post_text" value="' . $lol['post_text'] . '">'; ?>
													<button class="btn btn-primary">Редактировать</button>
												</form>
											</div>
										</div>
									</div>
									
										
							</div>
						<?php }?>
						
					
			</div>			
			<div class="col-3 ">Правая колонка (col-3). <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
		</div>
	</div>
</body>
</html>
	