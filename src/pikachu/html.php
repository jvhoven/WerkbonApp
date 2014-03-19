<?php
	
	namespace Pikachu;

	class Html{

		/**
		* Load stylesheets into the html file. 
		*
		*/
		public static function style($url){
			$url = str_replace("'", '', $url);
			return "<link href='" . PATH  . "\public/" . $url . "' rel='stylesheet'>";

		}

		/**
		* Load image into the html file.
		*/
		public static function image($url){
			$url = str_replace("'", '', $url);
			return "<img src='" . PATH . "\public/" . $url ."' />";
		}

		/**
		* Parse javascript into the html file.
		*/
		public static function script($url){
			$url = str_replace("'", '', $url);
			return "<script src='" . PATH . "\public/" . $url . "'></script>";
		}
	}