<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post" action="login.php">
		<?php 
		getToken();
		?>
		Username : <br/>
		<input type="text" name="username">
		<br/>
		Password : <br/>
		<input type="Password" name="password">
		<input type="submit" name="Login"> 
		<?php echo getTokenField(); ?>
	</form>
</body>
</html>

<?php

function getToken()
{
	if(!isset($_SESSION['user_token']))
	{
		$_SESSION['user_token'] = md5(uniqid());
	}
}

function checkToken($token)
{
	if($token != $_SESSION['user_token'])
	{
		header('location: 404.php');
		exit;
	}
}

function getTokenField()
{
	return'<input type="hidden" name="token" value="'.$_SESSION['user_token'].'"/>';
}

function destroyToken()
{
	unset($_SESSION['user_token']);
}
?>