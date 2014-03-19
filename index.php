<?php
	error_reporting(E_ALL);
	session_start();

	/**
	* Prime some default constants
	*/
	define('BASE', __DIR__);
	define('PATH', '/WerkbonApp/');

	/**
	* Initialize the composer autoloader class.
	*/
	$loader = require 'vendor/autoload.php';

	/**
	* Load the file that contains the path to the model, controller and view directory
	* into the application environment.
	*/
	Pikachu\Bootstrap::load("paths", BASE . "/app/config/paths.php");

	/**
	* Load the file that contains the routes into the 
	* application environment.
	*/
	Pikachu\Bootstrap::load("routes", BASE . "/app/routes.php");
