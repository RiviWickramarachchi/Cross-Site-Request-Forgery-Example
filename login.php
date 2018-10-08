
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
	<form method="post" action="page1.php">
		
		Username : <br/>
		<input type="text" name="username">
		<br/>
		Password : <br/>
		<input type="Password" name="password">
		
		<input type="submit" name="Login"> 
		
		
	</form>
</body>
</html>

