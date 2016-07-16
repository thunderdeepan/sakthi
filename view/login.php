<?php 
include_once '../controllers/default_functions.php';
	$type = $_GET['type'];
	login_page_session_check();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div style="text-align: center;">
		<img src="../images/logo.jpg" height="81px" width="184px">
		<h3>Welcome Promoter</h3>
		<h4>Login</h4>
		<form method="post" action="../controllers/login_controller.php" role="form">
			<?php if($type == "login_error"){ echo '<p style="color:red">Invalid username or password</p>'; } ?>
			<input type="textbox" name="username" class="form-control" placeholder="username" required autofocus><br/>
			<input type="password" name="password" class="form-control" placeholder="password" required><br/>
			<input type="submit" name="login" value="login" class="form-control">
		</form>
	</div>
</div>

</body>
</html>