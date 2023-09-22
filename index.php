<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Animated Login</title>
	<link rel="stylesheet"  href="style.css">
</head>
<body>
	<form class="box" method="post"  action="checklogs.php">
		<?php  
				
					$notif = @$_GET['notif'];
					if(isset($notif))
					{
						if($notif=="error")
						{
				?>
				<div class="alert">
					<strong>LOGIN</strong><br>
					Invalid Username or Password! <br> Try Again!
				</div>
				<?php  
						}
					}
				?>
		<h1>Login</h1>
		<input type="text" name="txtuser" placeholder="Username" required="Username">
		<input type="password" name="txtpass" placeholder="Password" required="Password">
		<input type="Submit" name="btnlog"  value="Login">
		<p >Create New Account? <a href="signup.php">Sign Up</a></p>
	</form>
</body>
</html>