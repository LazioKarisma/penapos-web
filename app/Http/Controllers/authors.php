<?php

namespace App\Http\Controllers;

class Authors extends Controller {

	public function index() {
		$view = View('authors.index', array('name'=>'Hengky Alvinsius'));

		$view->title = 'Authors and Book from Controller';
		
		return $view;
	}
}