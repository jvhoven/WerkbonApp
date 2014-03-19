<?php 

	namespace Pikachu\Controller;

	class Base{

		public function __construct(){
			echo 'hallo';
		}

		public function setModel($model = false){

			$modelDir = Bootstrap::load('paths', BASE . "/app/config/paths.php")["models"];

			if(\Filesystem\File::exists($modelDir . $model . '.php')){
			}

		}

	}