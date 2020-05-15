<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDATS LOGIN</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="post" action="register.php">
			<h1>Create Account</h1>
			<input type="text" placeholder="Name" name="username" value="<?php echo $username; ?>" />
			<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" />
			<input type="password" placeholder="Password" name="password_1" />
			<input type="password" placeholder=" Confirm Password" name="password_2" />
			<button type="submit" class="btn" name="reg_user">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="post" action="register.php">
			<h1>Sign in</h1>
			<input type="email" placeholder="Email" name="email" />
			<input type="password" placeholder="Password" name="password" />
			<a href="#">Forgot your password?</a>
			<button type="submit" class="btn" name="login_user">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<footer>
	<p>
	<?php include('errors.php'); ?>
	</p>
</footer>

<script src="index.js"></script>
</body>

</html>