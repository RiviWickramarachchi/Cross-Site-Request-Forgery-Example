<?php

require_once 'core/init.php';

echo Config::get('remember/cookie_expiry');
echo " ";
echo Token::genToken();
?>