<?php

	class GebruikersController extends Pikachu\Controller\Base{

		public function indexAction(){
			$this->renderView();
		}

		private function renderView(){
			$view = new Pikachu\View("admin/gebruikers.php");
			$view->render();
		}

	}