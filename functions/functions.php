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
