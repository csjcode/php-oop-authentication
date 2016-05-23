<?php
require_once 'file:///C:/wamp/www/tutorials/authentication/ooplr/core/init.php'; 

$user= new User();
$user->logout();

Redirect::to('index.php');