<?php
Class Input{

	public static function get($item)
	{
		if(isset($_POST[$item]))
		{
			return $_POST[$item];
		}
		if(isset($_GET[$item]))
		{
			return $_GET[$item];
		}
		return " ";
	}
}

?>