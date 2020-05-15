<?php 
  session_start(); 

	// initializing variables
	$username = "";

	// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: register.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: register.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['email'])) : ?>
    	<p><strong>Welcome &nbsp <u><?php echo $_SESSION['email']; ?></u></strong></p>
		<p> <strong> All the Registered users are as follows:</strong></br>
		<?php
		$result = mysqli_query($db,"SELECT username FROM users");
		$storeArray = Array();
		while ($row = mysqli_fetch_array($result, 1)) {
			$storeArray[] =  $row['username'];  
			// now $storeArray will have all the names.
		}
		foreach($storeArray as $value){
			echo "<strong>".$value . "<br>";}
	?>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>