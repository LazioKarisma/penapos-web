<?php

namespace App\Http\Controllers;

use App\Models\User as User;

class UserController extends Controller 
{

	public function index() {
		$view = View('users.index');

		$view->users = User::all();

		$view->title = mt_rand(10000000, 99999999);
		
		return $view;
	}
}