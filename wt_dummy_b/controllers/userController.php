<?php 
	require_once '../models/db_connect.php';
	$name="";
	$err_name="";
	$userName="";
	$err_userName="";
	$email="";
	$err_email="";
	$password="";
	$err_password="";
	$allSet=true;
	
	if(isset($_POST["signUp"]))
	{
		// name validation
		if(empty($_POST["name"]))
		{
			$err_name = "*required name";
			$allSet= false;
		}
		else{ $name = htmlspecialchars($_POST["name"]);}
		
		// username validation
		if(empty($_POST["userName"]))
		{
			$err_userName = "*required user name";
			$allSet= false;
		}
		else if(strlen($_POST["userName"]) < 6)
		{
			$err_userName = "*at least 6 char required";
			$allSet= false;
		}
		else if(strpos($_POST["userName"]," "))
		{
			$err_userName = "*no space is allowed";
			$allSet= false;
		}
		else{ $userName = htmlspecialchars($_POST["userName"]);}
		
		// password validation
		
		if(!empty($_POST["password"]))
		{
			if(strlen($_POST["password"]) >= 8)
			{
				if(!(strtolower($_POST["password"]) == $_POST["password"]) && (!(strtoupper($_POST["password"]) == $_POST["password"])))
				{
					$hasNumber = false;
					$num_arr = array("0","1","2","3","4","5","6","7","8","9");
					$pass =htmlspecialchars($_POST["password"]);
					for($i = 0; $i < strlen($pass); $i++)
					{
						for($j = 0; $j <10; $j++)
						{
							if($pass[$i]== $num_arr[$j])
							{
								//echo "yo<br>";
								$hasNumber = true;
								break;
							}
						}
					}
					if($hasNumber == true)
					{
						if(strpos($_POST["password"], "#") || strpos($_POST["password"], "?"))
						{
							$password = htmlspecialchars($_POST["password"]);
						}
						else{$err_password = "*atleast one special character # or ? is required";$allSet= false;}
					}
					else{$err_password = "*atleast one digit is required";$allSet= false;}
				}
				else{$err_password = "*upper and lower case character required";$allSet= false;}
			}
			else{$err_password = "*minimum password length is 8";$allSet= false;}
		}
		else{$err_password = "*password required";$allSet= false;}

		
		
		
		// email validation
		
		if(empty($_POST["email"]))
		{
			$err_email = "*required email";
			$allSet= false;
		}
		else if(strpos($_POST["email"],"@"))
		{
			$flag = false;
			$pos = strpos($_POST["email"],"@");//echo "pos = $pos";
			$str = $_POST["email"];
			for($i = $pos; $i < strlen($str); $i++)
			{
				//echo $i ."<br>";
				//echo $pos ."<br>";
				if($str[$i] == "."){$flag = true;break;}
			}
			if($flag == true){$email = htmlspecialchars($_POST["email"]);}
			else{$err_email = "*invalid email pattern";$allSet= false;}
		}
		else{$err_email = "*invalid email pattern";$allSet= false;}
		
		
		
		if($allSet)
		{
			
			addUser($name, $userName, $email, $password);
		}
		else{echo "allset is false";}
		
	}
	elseif(isset($_POST["login"]))
	{
		// username validation
		if(empty($_POST["userName"]))
		{
			$err_userName = "*required user name";
			$allSet= false;
		}
		else if(strlen($_POST["userName"]) < 6)
		{
			$err_userName = "*at least 6 char required";
			$allSet= false;
		}
		else if(strpos($_POST["userName"]," "))
		{
			$err_userName = "*no space is allowed";
			$allSet= false;
		}
		else{ $userName = htmlspecialchars($_POST["userName"]);}
		
		// password validation
		if(empty($_POST["password"]))
		{
			$err_password = "*required password";
			$allSet= false;
		}
		else{ $password = htmlspecialchars($_POST["password"]);}
		
		if($allSet)
		{
			
			verify($userName, $password);
		}
		else{echo "allset is false";}
	}
	
	function addUser($name, $userName, $email, $password)
	{
		$password=md5($password);
		$query="insert into users values ('$name','$userName','$email','$password')";
		execute($query);
	}
	
	function verify($userName, $password)
	{
		$password=md5($password);
		$query="select * from users where userName='$userName' and password='$password'";
		$result=get($query);
		if($result)
		{
			header("Location: dashboard.php");
			//echo $result[0]["userName"]
		}
		else{echo "user not found";}
	}

?>