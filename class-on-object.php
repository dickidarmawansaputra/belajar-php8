<?php
class Login
{

}

$login = new Login();

// di php 8 bisa seperti ini
var_dump($login::class);

// php 7
var_dump(get_class($login));
var_dump(Login::class);