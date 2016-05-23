# php-oop-authentication
Boilerplate for PHP OOP Login &amp; Authentication

(NOTE: make sure to change filepaths to your setup in core/init.php)

The original & inital commit of this is based on the lengthy PHP OOP authentication tutorial by PHP Academy (which I did step-by-step, and used for another project).

Now, I am in the process of making my own modifications on the front-end and upgrading with more advanced features, javascript libraries and PHP 7. Future checkins will be my modifications.

Although I am mostly currently doing React and Node.js work, I have seen some need for PHP authentication upgrades, so I'm hoping this will be helpful to somebody and/or my potential clients.

The original commit should be working locally, it may require some small modifications depending on your server setup and environment.   


Chris


### Notes

Random notes during the course.

Code derived from the PHPAcademy tutorial "PHP OOP Login Registration".

------------------------------------------------------------------------
			OOPLR			-				Directories (5) and Files (20)
------------------------------------------------------------------------

ooplr (7 files): changepassword.php, index.php, login.php, logout.php, profile.php, register.php, update.php

classes (10 files): Config.php, Cookie.php, DB.php, Hash.php, Input.php, Redirect.php, Session.php, Token.php, User.php, Validate.php

core (1 file): init.php

functions (1 file): sanitize.php

includes (1 file): errors.php

------------------------------------------------------------------------
										Development Workflow
------------------------------------------------------------------------


(1) PHP_OOP_Login_Register_System_Introduction_Part_1_23 (04:23)
(2) PHP_OOP_Login_Register_System_Database_Part_2_23 (04:41)
(3) PHP_OOP_Login_Register_System_Directory_Structure_and_Files_Part_3_23 (09:47)
(4) PHP_OOP_Login_Register_System_Initialization_Part_4_23 (08: 4)
(5) PHP_OOP_Login_Register_System_Functions_Part_5_23 (02:28)
(6) PHP_OOP_Login_Register_System_Config_Class_Part_6_23 (07:48)
(7) PHP_OOP_Login_Register_System_Database_Part_7_23 (15: 1)
(8) PHP_OOP_Login_Register_System_Database_Querying_Part_8_23 (22:25)
(9) PHP_OOP_Login_Register_System_Database_Results_Part_9_23 (04:54)
(10) PHP_OOP_Login_Register_System_Database_Insert_Update_Part_10_23 (16: 4)
(11) PHP_OOP_Login_Register_System_Form_Validation_Part_11_23 (37:21)
(12) PHP_OOP_Login_Register_System_CSRF_Protection_Part_12_23 (14:59)
(13) PHP_OOP_Login_Register_System_Flashing_Part_13_23 (07:33)
(14) PHP_OOP_Login_Register_System_Registering_Users_Part_14_23 (16:39)
(15) PHP_OOP_Login_Register_System_Redirecting_Part_15_23 (06:13)
(16) PHP_OOP_Login_Register_System_Log_in_Part_16_23 (17:27)
(17) PHP_OOP_Login_Register_System_Checking_Signed_In_Part_17_23_medium.webm (08:53)
(18) PHP_OOP_Login_Register_System_Logging_out_Part_18_23 (01:57)
(19) PHP_OOP_Login_Register_System_Remember_me_Part_19_23 (28: 8)
(20) PHP_OOP_Login_Register_System_Update_Information_Part_20_23 (11:12)
(21) PHP_OOP_Login_Register_System_Changing_Password_Part_21_23 (10:44)
(22) PHP_OOP_Login_Register_System_Permissions_Part_22_23 (07:56)
(23) PHP_OOP_Login_Register_System_User_Profiles_Part_23_23 (05:26)


====================================================================================

- Set up DB: tables users (id,username,password,salt,name,datejoined,group), groups (id, name, permissions), sesssions (id, user_id,hash)

- Fill in group table data for Standard and Administrator (JSON string)

- Create All Directories and Files

- init.php: Set php (1) session_start, (2) mysql/remember/session array of $GLOBALS in init.php, (3) spl_autoload_register, (4) sanitize include

- index.php - require_once init.php, echo back output of various queries/functions.

- sanitize.php - function to escape htmlentities.

- Config.php - get function and test in index.php like Config::get('mysql/host');

- Db.php (part 7)

- registration.php - field (part 11), set up object code for validation

- Validate.php - 2nd half of part 11 -

- register.php - echo back in form the errors from Validate.php and remember form data

- Security vulnerabilties (pt. 12) - Token.php and Session.php

- Session.php - exists, put, delete, flash functions (flash to return success msg)

- Hash.php (pt14)

- Redirect


Chris
