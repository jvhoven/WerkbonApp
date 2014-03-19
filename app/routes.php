<?php

	use Pikachu\Controller as Controller;
	
	$router = new \Slim\Slim();

	$router->get('/', function () {
		if(isset($_SESSION["logged_in"]))
		{
			$dashboard = new Pikachu\View('login.php');
			$dashboard->render();
		} else {
			$login = new Pikachu\View('admin/dashboard.php');
			$login->render();
		}
	});

	$router->get('/gebruikers', function () {
		$gebruikers = new Pikachu\View('admin/gebruikers.php');
		$gebruikers->render();
	});

	$router->run();

