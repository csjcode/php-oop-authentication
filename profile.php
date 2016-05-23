<?php

require_once 'file:///C:/wamp/www/tutorials/authentication/ooplr/core/init.php'; //echo 'index.php ';

if(!$username = Input::get('user')){
	Redirect::to('index.php');
} else {
	$user = new User($username);
	
	if(!$user->exists()){
		Redirect::to(404);
	} else {
		//echo 'exists ';

		$data=$user->data();

	}

	?>

	<h3><?php echo escape($data->username)?></h3>
	<p>Full name: <?php echo escape($data->name)?></p>

	<?php

	//echo $username;
}