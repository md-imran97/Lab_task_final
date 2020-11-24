<?php include_once "reg_validation.php" ;?>	
	
<html>
	<head>
		<title>Registation</title>
	</head>
	<body>
		
		<hr>
		<form action="" method="post">
			<fieldset>
				<legend><h1>Welcome to Registration form</h1></legend>
				<table>
					<tr>
						<td align="right">Username:</td>
						<td><input type="text" name="userName" value="<?php echo $user_name; ?>"><?php echo $err_user_name; ?></td>
					</tr>
					<tr>
						<td align="right">Password:</td>
						<td><input type="password" name="password" value="<?php echo $password; ?>"><?php echo $err_password; ?></td>
					</tr>
					<tr>
						<td align="right">Type:</td>
						<td><input type="text" name="type" value="<?php echo $type; ?>"><?php echo $err_type; ?></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="register" value="register"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>