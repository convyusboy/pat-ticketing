<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Course Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	
	|
	*/
	public function getIndex() {

		return View::make('home');
	}

	public function getOrder() {

		return View::make('orders');
	}

}

