
<?php
	require_once'core/init.php';
	Session::put(Config::get('session/session_name'),Session::genSession());
	Cookie::put(Config::get('remember/cookie_name'), Cookie::genCookieName(),Config::get('remember/cookie_expiry'));

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form name="loginForm" method="post" action="page1.php" onsubmit="return validateForm()">
		
		Username : <br/>
		<input type="text" name="username">
		<br/>
		Password : <br/>
		<input type="Password" name="password">
		
		<input type="submit" name="Login"> 
		
		
	</form>

	<script>
		function validateForm() 
		{
    		var x = document.forms["loginForm"]["username"].value;
    		var y = document.forms["loginForm"]["password"].value
   		 	if ((x == "") || (y== "")) 
   		 	{
       			 alert("Name must be filled out");
        		 return false; 
        	}
        	else if((x != "admin") || (y != "password"))
       		 {
        		alert(" Wrong Username or Password");
        		return false;
        	}
		}
</script>

</body>
</html>

