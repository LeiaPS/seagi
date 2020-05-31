<?php
namespace Core;
use \Models\Pessoas;
use \Models\Estados;
use \Models\Cidades;
use \Models\Logradouros;
use \Models\Estados_Civis;
use \Models\Helper;

class Controller {
	public function __construct() {

		// Instanciando Classes
		$pe;
		$this->pe = new Pessoas();
		$ec;
		$this->ec = new Estados_Civis();
		$es;
		$this->es = new Estados();
		$lo;
		$this->lo = new Logradouros();
		$ci;
		$this->ci = new Cidades();
		$he;
		$this->he = new Helper();
	}

	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		require 'Views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		require 'Views/Templates/template.php';
	}

	public function loadEspecificTemplate($viewName, $viewData = array(), $template) {
		require 'Views/Templates/'.$template.'.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		require 'Views/'.$viewName.'.php';
	}

}