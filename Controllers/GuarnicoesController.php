<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Guarnicoes;

class GuarnicoesController extends Controller {

	public function index() {
		$array = array();
		$array['title'] = 'SEAGI - Guarnições';
		$array['subtitle'] = 'SEAGI - GU`S';

		$this->loadEspecificTemplate('Painel/Guarnicoes/lista', $array, 'guarnicoes');
	}
	public function unico($id) {
		$array = array();
		$array['title'] = 'SEAGI - Guarnição '.$id;
		$array['subtitle'] = 'SEAGI - GU - GMD';

		$this->loadEspecificTemplate('Painel/Guarnicoes/unico', $array, 'guarnicoes');
	}

}