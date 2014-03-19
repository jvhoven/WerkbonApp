<?php
	
	namespace Pikachu\Filesystem;

	abstract class File{

		public static function exists($file){
			if(file_exists($file)){
				return true;
			}

			return false;
		}

	}