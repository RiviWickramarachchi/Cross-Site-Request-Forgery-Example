<?php

require_once 'core/init.php';



Session::put(Config::get('session/session_name'),Session::genSession());

echo Session::get(Config::get('session/session_name'));
echo "  ";
echo Token::genToken();


?>