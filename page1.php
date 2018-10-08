<?php

require_once 'core/init.php';





//echo Session::get(Config::get('session/session_name'));
//echo "  ";
//echo Cookie::get(Config::get('remember/cookie_name'));
//echo " ";
//echo Input::get('token');
//echo " ";
echo Token::check(Input::get('token'));


?>


<html>
	<head>
		<title> Second page form</title> 
	
	</head> 
			
	<body>

		<form action="page1.php" method="post">
			Data : <input type="text" name="datavals" id="datavals">
			<br>
			<input type="hidden" id="token" name="token" value= "<?php echo Token::genToken() ?>">
			<input id="sbmit" type="submit" name="submit CSRF Val">
		</form>

	</body>
</html>