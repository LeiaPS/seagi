<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Locais;

class LocaisController extends Controller {

	public function index() {
		$array = array();
		$array['title'] = 'SEAGI - Locais';
		$array['subtitle'] = 'SEAGI - QTH`s';

		$this->loadEspecificTemplate('Painel/Locais/lista', $array, 'locais');
	}
	public function unico($id) {
		$array = array();
		$array['title'] = 'SEAGI - Local '.$id;
		$array['subtitle'] = 'SEAGI - Local - GMD';

		$this->loadEspecificTemplate('Painel/Locais/unico', $array, 'locais');
	}

}