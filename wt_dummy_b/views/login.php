<?php 
	include 'main_header.php';
	require_once '../controllers/userController.php';
?>

<!--login starts -->
<div class="center-login">
	<h1 class="text text-center">Login</h1>
	<form class="form-horizontal form-material" action="" method="post">
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" class="form-control" name="userName" value="<?php echo $userName; ?>"><br>
			<span style="color:red"><?php echo $err_userName; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" class="form-control" name="password"><br>
			<span style="color:red"><?php echo $err_password; ?></span>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-danger" value="Login" class="form-control" name="login">
		</div>
		<div class="form-group text-center">
			
			<a href="signup.php" >Not registered yet? Sign Up</a>
		</div>
</div>

<!--login ends -->
<?php include 'main_footer.php';?>