<?php	
	
	namespace Pikachu;

	use \Pikachu\Router\Exception;

	abstract class Router{

		/**
		* Holds all the added routes
		*/
		public static $routes;

		/**
		* If baseDir is defined, the router will recognize it from there.
		*/
		public static $baseDir;

		/**
		* If the router isnt called from the root directory it's 
		* possible to supply a sub-directory which he needs to be executed from.
		*
		* @var string $baseDir
		*
		*/
		public static function configure($baseDir = false){

			// Adds basedir if defined
			self::$baseDir = $baseDir;
		}

		/**
		* Adds a route to the router to recognize.
		*	
		* @var string $path
		* @var function $callback
		*
		*/
		public static function add($path, $callback){

			$route = array(
				"identifier" => $path,
				"callback" => $callback
			);

			self::$routes[] = $route;
		}

		/**
		* Matches the routes with the url variable
		*/
		public static function dispatch(){

			$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
			strlen(self::$baseDir) ? $url = str_replace(self::$baseDir, "", $url) : "";

			foreach(self::$routes as $route){

				if(preg_match("#^" . $route['identifier'] . "$#", $url)){
					call_user_func($route['callback']);
				}
			}
		}
	}