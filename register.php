<?php
require_once 'file:///C:/wamp/www/tutorials/authentication/ooplr/core/init.php'; //echo 'index.php ';
if (Input::exists()){
	// echo "I have been run1";
	if(Token::check(Input::get('token'))){

		//echo "I have been run2";
		$validate = new Validate();
		$validation = $validate->check($_POST,array(
			'username' => array(
				'required' => true, 
				'min' => 2,
				'max' => 20,
				'unique' => 'users'
			),
			"password" => array(
				'required' => true,
				'min' => 6
			),
			'password_again' => array(
				'required' => true,
				'matches' => 'password'
			),
			'name' => array(
				'required' => true,
				'min' => '2',
				'max' => '50'
			)
		)); 
		
			if($validation->passed()){
				// register user
				$user = new User();

				$salt = Hash::salt(32);


				try{
						$user->create(array(
							'username' => Input::get('username'),
							'password' => Hash::make(Input::get('password'), $salt),
							'salt' => $salt,
							'name' => Input::get('name'),
							'joined' => date('Y-m-d H:i:s'),
							'group' => '1',
						));

				} catch(Exception $e){
					die($e->getMessage());
				}
				//echo "Passed";
				Session::flash('home','You were registered successfully and can now log in!');
				//Redirect::to(404);
				Redirect::to('index.php');

				// header('Location: index.php');
			} else {
				foreach($validation->errors() as $error){
					echo $error, '<br>';
				}
				// print_r($validation->errors()); 
				// output error
			}
	}

}

/*

if (Input::exists()){
	echo Input::get('username');
}

if (Input::exists()){
	echo "Submitted";
}

*/

?>


<form action="" method="post">
	<div class= "field">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>" autocomplete="off">
	</div
	<div class= "field">
		<label for="password">Choose password:</label>
		<input type="password" name="password" id="password" autocomplete="off">
	</div>
	<div class= "field">
		<label for="password again">Choose password again:</label>
		<input type="password" name="password_again" id="password_again" autocomplete="off">
	</div>
	<div class= "field">
		<label for="name">Your name:</label>
		<input type="text" name="name" id="name" value="<?php echo escape(Input::get('name')); ?>" autocomplete="off">
	</div>
	<input type="hidden" name="token" value="<?php echo Token::generate();?>">
	<input type="submit" value="Register">
</form>