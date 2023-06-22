<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style>
		body {
			background-color: #f2f2f2;
		}
		
		form {
			background-color: #ffffff;
			padding: 20px;
			border-radius: 10px;
			max-width: 500px;
			margin: 0 auto;
			box-shadow: 0 0 10px #ccc;
			font-family: Arial, sans-serif;
		}
		
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
		
		input[type="text"], input[type="email"], input[type="password"], input[type="number"] {
			width: 100%;
			padding: 10px;
			border: none;
			border-radius: 5px;
			margin-bottom: 20px;
			box-sizing: border-box;
			font-size: 16px;
			font-family: Arial, sans-serif;
		}
		
		input[type="submit"] {
			background-color: #4CAF50;
			color: #ffffff;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			font-family: Arial, sans-serif;
		}
		
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<form method="post" action="reg.php">
		<h2>Registration Form</h2>
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		
		<label for="name">Full Name:</label>
		<input type="text" id="name" name="name" required>
		
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		
		<label for="telegram">Telegram:</label>
		<input type="text" id="telegram" name="telegram" required>
		
		<label for="phone">Phone:</label>
		<input type="tel" id="phone" name="phone" required>
		
		
		<input type="submit" value="Register">
	</form>
</body>
</html>
