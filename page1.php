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
	
	</head> action="page1.php">
			Data : <input typ
	<body>

		<form method="post"e="text" id="datavals" name ="data">
			<br>
			<input type="label" name="">
			<input type="hidden" id="token" name="token" value= "<?php echo Token::genToken() ?>">
			<input id="sbmit" type="submit" name="submit CSRF Val">
		</form>

	</body>
</html>