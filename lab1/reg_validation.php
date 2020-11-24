<?php
	$name = "";
	$err_name = "";
	$user_name = "";
	$err_user_name = "";
	$password = "";
	$err_password = "";
	$confirm_password = "";
	$err_confirm_password = "";
	$email = "";
	$err_email = "";
	$phone_no = "";
	$phone_code = "";
	$err_phone = "";
	$address_street = "";
	$address_city = "";
	$address_state ="";
	$address_zip ="";
	$err_address ="";
	$birth_day ="";
	$birth_month ="";
	$birth_year ="";
	$err_birth_date ="";
	$gender ="";
	$err_gender ="";
	$sources = "";
	$err_sources = "";
	$bio = "";
	$err_bio = "";
	$type="";
	$err_type="";
	$fillAll=true;
	$serverName="localhost";
	$userName="root";
	$sPassword="";
	$dbName="lab1";
	
	if(isset($_POST["register"]))
	{
		// name validation
		/*if(empty($_POST["name"]))
		{
			$err_name = "*required name";
			$fillAll=false;
		}
		else{ $name = htmlspecialchars($_POST["name"]);}*/
		
		// username validation
		if(empty($_POST["userName"]))
		{
			$err_user_name = "*required user name";
			$fillAll=false;
		}
		else if(strlen($_POST["userName"]) < 6)
		{
			$err_user_name = "*at least 6 char required";
			$fillAll=false;
		}
		else if(strpos($_POST["userName"]," "))
		{
			$err_user_name = "*no space is allowed";
			$fillAll=false;
		}
		else{ $user_name = htmlspecialchars($_POST["userName"]);}
		
		
		// type validation
		if(empty($_POST["type"]))
		{
			$err_type = "*required type";
			$fillAll=false;
		}
		else{ $type = htmlspecialchars($_POST["type"]);}
		
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
						else{$err_password = "*atleast one special character # or ? is required";$fillAll=false;}
					}
					else{$err_password = "*atleast one digit is required";$fillAll=false;}
				}
				else{$err_password = "*upper and lower case character required";$fillAll=false;}
			}
			else{$err_password = "*minimum password length is 8";$fillAll=false;}
		}
		else{$err_password = "*password required";$fillAll=false;}

		/*if($_POST["password"] != htmlspecialchars($_POST["confirmPassword"]))
		{
			$err_confirm_password = "*password not matched";
			$fillAll=false;
		*/
		$enPass=md5($password);
		$conn=mysqli_connect($serverName,$userName,$sPassword,$dbName);
		$q = "INSERT INTO users (id, pass, userName,type) VALUES ('', '$enPass', '$user_name', '$type')";
		
		if($fillAll==true)
		{
			$result =mysqli_query($conn, $q);
			if(1)
			{
				echo "register successfully";
			}
		}
		else{echo "registation not successful";}
	}
	
?>