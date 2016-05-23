<?php
session_start(); //echo 'init.php ';
$GLOBALS['config'] = array (
			'mysql' => array(
					'host' => '127.0.0.1',
					'username' => 'root',
					'password' => '',
					'db' => 'tutorials'
			),
			'remember' => array(
					'cookie_name' => 'hash',
					'cookie_expiry' => 604800
			),
			'session' => array(
					'session_name' => 'user',
					'token_name' => 'token'
			)
	);

spl_autoload_register(function($class){
	require_once 'file:///C:/wamp/www/tutorials/authentication/ooplr/classes/' . $class . '.php';
});

require_once('file:///C:/wamp/www/tutorials/authentication/ooplr/functions/sanitize.php');

if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))){
	//echo 'User asked to be remembered';
	$hash = Cookie::get(Config::get('remember/cookie_name'));
	$hashCheck = DB::getInstance()->get('users_session',array('hash','=',$hash));

	if($hashCheck->count()){
		//echo 'Hash matches. Log user in.';
		//echo "Check";
		$user = new User($hashCheck->first()->user_id);
		$user ->login();
	}

}
