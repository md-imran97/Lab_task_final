<?php
	session_start();
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$serverName="localhost";
	$userName="root";
	$sPassword="";
	$dbName="lab1";
	if(isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		$enPass=md5($pass);
		$conn=mysqli_connect($serverName,$userName,$sPassword,$dbName);
		$q = "select * from users where userName='$uname' and pass='$enPass'";
		if(!$hasError){
			$result =mysqli_query($conn, $q);
			if(mysqli_num_rows($result)>0)
			{
				header("Location: dash.php");
				echo "login";
			}
		}
	}
	
?>