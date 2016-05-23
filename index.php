<?php
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);
*/

require_once 'file:///C:/wamp/www/tutorials/authentication/ooplr/core/init.php'; //echo 'index.php ';
// var_dump (Config::get('mysql/host')); // 127.0.0.1
//Config::get('mysql/host');

if(Session::exists('home')){
	echo '<p>' . Session::flash('home') . '</p>';
}


$user = new User(); // current user
//$anotheruser = new User(8); // another user

//echo $user->data()->username;
echo $user->isLoggedIn();

if ($user->isLoggedIn()){
	echo "Logged in";
?>

<p>Hello <a href="profile.php?user=<?php echo escape($user->data()->username); ?>"><?php echo escape($user->data()->username); ?></a>!</p>

<ul>
	<li><a href="logout.php">Log Out</a></li>
	<li><a href="update.php">Update details</a></li>
	<li><a href="changepassword.php">Change password</a></li>
</ul>


<?php

	if ($user->hasPermission('moderator')){
		echo '<p>You are a moderator!</p>';
	}

} else {

	echo '<p>You need to <a href="login.php">log in</a>. Please <a href="register.php">register</a></p>';
}

//echo $user->data()->username;







/*
if(Session::exists('success')){
	echo Session::flash('success');
}
*/



/*
$userInsert= DB::getInstance()->update('users',3,array(
	'password'=>"newpassword",
	'name'=>"Dale Garret"
	));

$userInsert= DB::getInstance()->insert('users',array(
	'username' 	=> "Dale",
	'password' 	=> "password",
	'salt'			=> "salt"
	));


*/
// $user= DB::getInstance()->get('users',array('username', '=', 'alex'));
// $user= DB::getInstance()->query("SELECT * FROM users");
// $user= DB::getInstance()->query("SELECT username FROM users WHERE username=?", array('billy'));


	/*

if (!$user->count()){
	echo 'No user.';
} else {
	
	echo $user->first()->username; 
 } 

	foreach($user->results() as $user){
		echo $user->username, '<br>';
	}
	*/


/*
$users = DB::getInstance()->query('SELECT username FROM users');
if ($users->count()){
	foreach ($users as $user){
		echo $user->$user;	
	}
}
*/
