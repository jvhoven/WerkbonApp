<?php
	
	namespace Pikachu;

	class Bootstrap{
	
		/**
		* The files variable will hold all the files that are 
		* required for some components to able to function in our application.
		* This includes config files.
		*
		* @access protected
		*/
		protected static $files = array();

		/**
		* This will hold all the dependency classes
		* that the application needs to startup.
		*/
		public static function load($name, $url = false){

			if(!isset(self::$files[$name])){
				if(Filesystem\File::exists($url)){
					self::$files[$name] = include_once($url);
				} else {
					throw new Bootstrap\Exception("Cannot find file " . $url);
				}
			} else {
				return self::$files[$name];
			}
		}

	}