<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Setores;

class SetoresController extends Controller {

	public function index() {
		$array = array();
		$array['title'] = 'SEAGI - Setores';
		$array['subtitle'] = 'SEAGI - Setores';

		$this->loadEspecificTemplate('Painel/Setores/lista', $array, 'setores');
	}
	public function unico($id) {
		$array = array();
		$array['title'] = 'SEAGI - Setor '.$id;
		$array['subtitle'] = 'SEAGI - Setor - GMD';

		$this->loadEspecificTemplate('Painel/Setores/unico', $array, 'setores');
	}

}