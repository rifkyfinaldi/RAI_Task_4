<html>
<head>
	<title>Welcome to the SITE</title>
	<style type="text/css">
		body{
			background-color:green;
			font-family:arial;
			color:white;
		}
		th{
			font-style:italic;
			text-decoration:underline;
		}
	</style>
</head>
<body>
	<br><br><br><br><br><br><br><br><br><br><br><hr>
	<form name="login_client" action="login.php" method="post">
	<table align="center" cellpadding="10" cellspacing="10">
		<tr>
			<th colspan="2">Please Input Your Account</th>
		</tr>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" maxlength="20" required="required"/></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="text" name="password" maxlength="20" required="required"/></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="button" name="loginbtn" value="LOGIN"/></td>
		</tr>
	</table>
	</form>
	<hr>
	<p align="right">Dont't have an account yet? Sign up <a href="registration.php">HERE...</a><p>
</body>
</html>
