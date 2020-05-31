<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Partes;

class PartesController extends Controller {

	public function index() {
		$array = array();
		$array['title'] = 'SEAGI - Partes';
		$array['subtitle'] = 'SEAGI - QTH`s';

		$this->loadEspecificTemplate('Painel/Partes/lista', $array, 'partes');
	}
	public function unico($id) {
		$array = array();
		$array['title'] = 'SEAGI - Parte '.$id;
		$array['subtitle'] = 'SEAGI - Parte - GMD';

		$this->loadEspecificTemplate('Painel/Partes/unico', $array, 'partes');
	}

}