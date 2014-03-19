<?php
	
	namespace Pikachu;

	class Controller{

		/**
		* This variable will hold all the controller files.
		*/
		private static $controllers;

		/**
		* The default dir where the controllers will be created.
		*
		* @see app/config/paths.php
		*/
		public static $dir;

		public static function register($controller, $action = false){

			self::$dir = Bootstrap::load('paths', BASE . "/app/config/Paths.php")["controllers"];

			if(Filesystem\File::exists(self::$dir . $controller . '.php')){
				self::$controllers[$controller] = include_once(self::$dir . $controller . '.php');
				$action = $action ? $action : 'indexAction';

				call_user_func(array($controller, $action));

			} else {
				throw new Filesystem\Exception("Cannot find controller" . $controller);
			}

		}
	}