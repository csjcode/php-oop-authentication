<?php // echo 'Config.php ';
class Config {
	public static function get ($path = null){
		if($path){
			$config= $GLOBALS['config'];
			$path = explode('/',$path);

			foreach ($path as $bit) {
				//echo $bit;
				if (isset($config[$bit])){
					$config = $config[$bit];
				}
			}

			return $config;
		}

			return false;
	}
}