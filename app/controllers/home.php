<?php

class Home extends Controller {

	public function index() {
		$this->view('home/welcome', ['name' => 'World']);
	}
}