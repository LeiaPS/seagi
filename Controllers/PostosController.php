<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Postos;

class PostosController extends Controller {

	public function index() {
		$array = array();
		$array['title'] = 'SEAGI - Postos';
		$array['subtitle'] = 'SEAGI - QTH`s';

		$this->loadEspecificTemplate('Painel/Postos/lista', $array, 'postos');
	}
	public function unico($id) {
		$array = array();
		$array['title'] = 'SEAGI - Posto '.$id;
		$array['subtitle'] = 'SEAGI - Posto - GMD';

		$this->loadEspecificTemplate('Painel/Postos/unico', $array, 'postos');
	}

}