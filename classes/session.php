<?php
	
	class Session
	{
		public static function exists($name)
		{
				return(isset($_SESSION[$name])) ? true : false;
		}

		public static function put($name, $value)
		{

			return $_SESSION[$name] = $value;
		}

		public static function get($name)
		{
			return $_SESSION[$name];
		}

		public static function genSession()
		{
			return rand(0,100);
		}

	}

?>