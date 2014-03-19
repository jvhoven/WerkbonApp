<?php
	
	namespace Pikachu;

	class Controller{

		/**
		* The default dir where the controllers will be created.
		*
		* @see app/config/paths.php
		*/
		public static $dir;

		public function __construct($controller, $action = false){

			self::$dir = Bootstrap::load('paths', BASE . "/app/config/Paths.php")["controllers"];

			if(Filesystem\File::exists(self::$dir . $controller . '.php')){
				include_once(self::$dir . $controller . '.php');
				$action = $action ? $action : 'indexAction';

				call_user_func(array(new $controller, $action));

			} else {
				throw new Filesystem\Exception("Cannot find controller" . $controller);
			}

		}
	}