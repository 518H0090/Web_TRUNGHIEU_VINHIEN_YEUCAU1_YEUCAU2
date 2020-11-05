<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
</head>
<body>
	<form action="reset-request.php" method="post">
		<h2>Reset password</h2>
		<div>
			<label>Your email address</label>
			<input type="email" name="email" placeholder="Enter Email">
		</div>
		<div>
			<button type="submit" name="reset-request-submit">Submit</button>
		</div>
	</form>
</body>
</html>