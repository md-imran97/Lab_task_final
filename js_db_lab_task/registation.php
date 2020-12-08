<html>
	<title></title>
	<head></head>
	<body>
		<h1>Registation Form</h1>
		<form method="post" onsubmit="return validate()" action="">
			<table>
				<tr>
					<td>Name </td>
					<td><input type="text" id="name" name="name"><span id="err_name"></span></td>
				</tr>
				<tr>
					<td>User name </td>
					<td><input type="text" id="userName" name="userName"><span id="err_userName"></span></td>
				</tr>
				<tr>
					<td>Password </td>
					<td><input type="password" id="password" name="password"><span id="err_password"></span></td>
				</tr>
				<tr>
					<td>Email </td>
					<td><input type="text" id="email" name="email"><span id="err_email"></span></td>
				</tr>
				<tr>
					<td>Phone </td>
					<td><input type="text" id="phone" name="phone"><span id="err_phone"></span></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" id="register" name="register" value="Register"></td>
					
				</tr>
			</table>
		</form>
		<script>
			var numArr=[0,1,2,3,4,5,6,7,8,9];
			function getElement(id){
				return document.getElementById(id);
			}
			
			function validate(){
				//refresh();
				var allSet=true;
				var name = getElement("name");
				var email = getElement("email");
				var userName = getElement("userName");
				var password = getElement("password");
				var phone = getElement("phone");
				var err_name = getElement("err_name");
				var err_email = getElement("err_email");
				var err_userName = getElement("err_userName");
				var err_password = getElement("err_password");
				var err_phone = getElement("err_phone");
				
				
				if(name.value == ""){
					allSet=false;
					err_name.innerHTML = "Username Required";
					//e_name.focus();
					//return !hasErr;
				}
				
				else if(1)
				{
					for(var i=0;i<numArr.length;i++)
					{
						if(name.value.search(numArr[i]))
						{
							allSet=false;
							err_name.innerHTML = "Numbers are not allowed";
							break;
						}
					}
				}
				
				if(email.value == ""){
					allSet=false;
					err_email.innerHTML = "Email Required";
					//e_email.focus();
					//return !hasErr;
				}
				else if(1)
				{
					var posAt = email.value.search("@");
					
					if(posAt && posAt<email.value.length-1)
					{
						var posDot = email.value.indexOf(".",posAt+1);
						if(!posDot)
						{
							allSet=false;
							err_email.innerHTML = "Email formate not matched";
						}
							
					}
					else 
					{
						allSet=false;
						err_email.innerHTML = "Email formate not matched";
					}
				}
				
				if(userName.value == ""){
					allSet=false;
					err_userName.innerHTML = "Username Required";
					//e_username.focus();
					//return !hasErr;
				}
				else if(1)
				{
					if(! userName.value.search(" "))
					{
						if(userName.value.length <6)
						{
							allSet=false;
							err_userName.innerHTML = "length must be atleast 6";
						}
					}
					else
					{
						allSet=false;
						err_userName.innerHTML = "space are not allowed";
					}
				}
				
				if(password.value == "")
				{
					allSet=false;
					err_password.innerHTML = "password required";
				}
				else if(password.value.length <8 )
				{
					allSet=false;
					err_password.innerHTML = "password required atleast 8 character";
				}
				if(phone.value=="")
				{
					allSet=false;
					err_phone.innerHTML = "phone number required";
				}
				else if(1)
				{
					var num=0;
					for(var i=0;i<phone.value.length;i++)
					{
						for(var j=0;j<numArr.length;j++)
						{
							if(phone.value[i]==numArr[j])
							{
								num++;
							}
						}
					}
					if(num != phone.value.length)
					{
						allSet=false;
						err_phone.innerHTML = "phone number required only numeric";
					}
				}
				if(allSet)
				{
					return true;
				}
				else
				{
					return false;
				}

			}
		</script>
		
	</body>
</html>