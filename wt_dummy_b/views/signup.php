<?php 
	
	require_once 'main_header.php';
	require_once '../controllers/userController.php';

?>


<!--sign up starts -->
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form class="form-horizontal form-material" action="" method="post">
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="text" class="form-control" name="name" value="<?php echo $name; ?>"><br>
			<span style="color:red"><?php echo $err_name; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" class="form-control" name="userName" value="<?php echo $userName; ?>"><br>
			<span style="color:red"><?php echo $err_userName; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" class="form-control" name="email" value="<?php echo $email; ?>"><br>
			<span style="color:red"><?php echo $err_email; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" class="form-control" name="password"><br>
			<span style="color:red"><?php echo $err_password; ?></span>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" value="Sign Up" class="form-control" name="signUp">
		</div>
</div>

<!--sign up ends -->
<?php include 'main_footer.php';?>