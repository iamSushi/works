<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="bs/bootstrap.min.css">
</head>

<?php

$mysqli = new mysqli('localhost', 'root', '','dgroup_system');

?>
<html lang="en">
	<head>
		<style>
		</style>
		<title>Front Page</title>
		<link rel="stylesheet" type="text/css" href="bs/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/css.css">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-dark">
			  <h3 style="color: white; padding-top: 10px;" class="blockquote">Discipleship System</h3>
			</nav>
		</header>
		<div>
			<form class="container" style="padding-top: 50px;">
			  <div class="form-group">
			  	<h1>CCF Admin Login</h1>
			    <label>Username</label>
			    <input type="text" class="form-control" name="username" placeholder="Admin Username" required>
			  </div>
			  <div class="form-group">
			    <label">Password</label>
			    <input type="password" class="form-control" name="password" placeholder="Password" required>
			  </div>
			  <div class="form-check">
			    <label class="form-check-label">
			      <input type="checkbox" class="form-check-input"> Remember Me!
			    </label>
			  </div>
			  <body> 
			  		<a href="viewmember.php" target="_self"><b>Log In</b></a>
			  </body>
			</form>
		</div>


	</body>
</html>