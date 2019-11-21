<?php

class Controller {

	protected $loader;
	protected $twig;

	public function model($model) {
		require_once '../app/models/' . $model . '.php';
		return new $model();
	}

	public function view($view, $data = []) {
		if (!isset($this->loader) || !isset($this->twig)) {
			$this->loader = new \Twig\Loader\FilesystemLoader($this->root());
			$this->twig = new \Twig\Environment($this->loader);
		}

		if (!array_key_exists('url', $data)) {
			$data['url'] = AppConfiguration::$APP_URL;
		}

		if (!array_key_exists('assets', $data)) {
			$data['assets'] = AppConfiguration::$APP_URL . 'public/';
		}
		
		echo $this->twig->render($view . '.html.twig', $data);
	}

	public function root() {
		$vendor = new \ReflectionClass(\Composer\Autoload\ClassLoader::class);
		return str_replace('vendor', 'app\views', dirname(dirname($vendor->getFileName())));
	}

	public function post($var = '') {
		return (isset($_POST[$var])) ? $_POST[$var] : null;
	}

	public function get($var = '') {
		return (isset($_GET[$var])) ? $_GET[$var] : null;
	}
	
	public function assets($path = '') {
		return AppConfiguration::$APP_URL . 'public/';
	}
}
