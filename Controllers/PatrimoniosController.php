<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Patrimonios;

class PatrimoniosController extends Controller {

	public function index() {
		$array = array();
		$array['title'] = 'SEAGI - Patrimônios';
		$array['subtitle'] = 'SEAGI - QTH`s';

		$this->loadEspecificTemplate('Painel/Patrimonios/lista', $array, 'patrimonios');
	}
	public function unico($id) {
		$array = array();
		$array['title'] = 'SEAGI - Patrimônio '.$id;
		$array['subtitle'] = 'SEAGI - Patrimonio - GMD';

		$this->loadEspecificTemplate('Painel/Patrimonios/unico', $array, 'patrimonios');
	}

}