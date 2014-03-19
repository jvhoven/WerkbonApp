<?php
	
	namespace Pikachu;

	class View{	


		public $dir;

		/**
		* The template variable will be assigned to the template name  
		* if the file exists.
		*
		* @access protected 
		*/
		protected $template;

		/**
		* This array will hold all the information that needs to be passed
		* to the template.
		*
		* @access protected
		*/
		protected $vars = array();

		/**
		* The output will hold the rendered data that has gone through
		* the view renderer class.
		*
		* @see Pikachu\View\Rennderer 
		* @access protected
		*/
		protected $output;

		/**
		* The __construct function will check if the template file 
		* exists, and if it does it'll assign the name to the template variable.
		*
		* It'll also load in any given variables that need to be passed along
		* to the template
		*
		*/
		public function __construct($template, $vars = false){

			// Load base directory from the config file.
			$viewPath = Bootstrap::load('paths');
			$this->dir = $viewPath["views"];

			// Check if there have been parameters passed onto the instantation.
			count($vars) ? $this->vars = $vars : '';

			if(Filesystem\File::exists($this->dir . $template)){
				$this->template = $this->dir . $template;
			} else {
				throw new Filesystem\Exception("Cannot find template " . $template);
			}
		}

		/**
		* We want all the variables to be put into the variable $vars.
		*
		*/
		public function __set($key, $value){
			$this->vars[$key] = $value;
		}

		/**
		* Same with retrieving, we want all our data to be in the variable $vars, 
		* as such, retrieving will be out of the $vars variable.
		*
		*/
		public function __get($key){
			return $this->vars[$value];
		}


		/**
		* Once the class finished loading, it'll destruct. When this happends
		* the class will load in the view and pass along the defined parameters.
		*
		*/
		public function render(){

			$this->vars ? extract($this->vars) : '';
			$fileContents = file_get_contents($this->template);
			
			// Pass the file contents to the view renderer.	
			$this->output = new View\Renderer($fileContents);
		}

	}