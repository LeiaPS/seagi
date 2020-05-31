<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Boletins;

class BoletinsController extends Controller {

	public function index() {
		$array = array();
		$array['title'] = 'SEAGI - Boletins';
		$array['subtitle'] = 'SEAGI - VTR - GMD';

		$this->loadEspecificTemplate('Painel/Boletins/lista', $array, 'boletins');
	}
	
	public function unico($id) {
		$array = array();
		$array['title'] = 'SEAGI - Boletim '.$id;
		$array['subtitle'] = 'SEAGI - VTR - GMD';

		$this->loadEspecificTemplate('Painel/Boletins/unico', $array, 'boletins');
	}

}