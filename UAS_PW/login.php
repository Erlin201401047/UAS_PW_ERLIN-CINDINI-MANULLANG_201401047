<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no"/>
	<title> Login </title>
	<style>
		body{
			font-size: 25px;
			text-align: center;
			background color: mistyrose;
			font-family: lucida console;
			color: black;
			background-image: url("pattern.jpeg");

		}	
	</style>
</head>
<body style="background-size: cover;">
    <div class="container">
	<br>
	<br>
    <h1> Login </h1>
	<form method="POST" action="aksi_login.php">
		<label>Username:</label>
		<input name="username" type="text" placeholder="username kamu">
		<br>
		<br>
		<label>Password:</label>
		<input name="password" type="password" placeholder="password kamu">
		<br>
		<br>
		<button>Login</button>
	</form>
	</div>

</body>