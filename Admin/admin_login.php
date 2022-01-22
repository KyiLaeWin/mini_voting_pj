<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Project Structure</title>

	<!-- Favicon -->
	

	<!-- Fontawesome CSS -->
	
<link rel="stylesheet" href="font/font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<!-- Custom CSS -->
	<style type="text/css">
		label{margin-top:30px;}
		.center{margin: 30px;}
	</style>
	
	
</head>
<body style="background-color: lightblue;">

	<div class="top-bar" style="font-size: 20px;text-align: center;color: purple;margin-top:20px;"><h2>
		Online Voting System</h2>
	</div>


	<div class="banner" style="text-align: center">
		<div class="banner-body">	
			<h2 style="color:red;">logged in to Vote!!</h2>	
			
		</div>

	</div>

	
		

	
		
		
			
					<div style="text-align: center;margin-top:20px;">
			        <form action="auth_login.php" method="POST">
					<label for="email">Email</label>
					<input type="text" name="email" id="email"><br>
					
					<label for="password">Password</label>
					<input type="password" name="password" id="password"><br>
					<?php
					if (isset($_SESSION['error'])){
						$error=$_SESSION['error'];
						echo "<span>";
						echo $error;
						echo "</span>";

					}

					?>

					<a class="center" href="">Forget Password</a><br>

					<button class="center" class="button" name="button">Log In</button>
			</form>
		</div>
				
		


	
	
	
	
	<!-- JS -->
	

	<!-- Custom JS -->
<?php unset($_SESSION['error']);?>	
</body>
</html>