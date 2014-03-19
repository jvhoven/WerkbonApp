<?php
	
	namespace Pikachu\View;
	use \Pikachu\Html as HTML;

	class Renderer{

		/**
		* Contains injected header css and javascript files.
		*/
		private $header;

		public function __construct($html){

			preg_match_all('/(\{{.*?\}})/', $html, $matches);
			unset($matches[1]);

			foreach($matches[0] as $match){
				preg_match('/{([^{|}]*)}/', $match, $possibilities);
				$function = str_replace(' ', '', $possibilities[1]);

				$content = $this->replace($function);
				$html = str_replace($match, $content, $html);

				/*echo "<textarea>";
				echo $html;
				echo "</textarea>";*/
			}

			echo $html;
		}

		private function replace($function){

			$names = explode("::", $function);
			$namespace = '\Pikachu';
			// Get class name
			$className = $names[0];

			// Get method name
			$methodName = trim(preg_replace('/\s*\([^)]*\)/', '', $names[1]));

			// Get variables
			$vars = preg_match('#\((.*?)\)#', $names[1], $match);
			$variables = explode(',', $match[1]);
			
			// Call the variable from classname
			$value = call_user_func_array(array($namespace . '\\' . $className, $methodName), $variables);
			return $value;
		}

	}