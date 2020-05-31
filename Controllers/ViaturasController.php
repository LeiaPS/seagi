<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Viaturas;

class ViaturasController extends Controller {

	public function index() {
		$array = array();
		$array['title'] = 'SEAGI - Viaturas';
		$array['subtitle'] = 'SEAGI - VTR - GMD';

		$this->loadEspecificTemplate('Painel/Viaturas/lista', $array, 'viaturas');
	}
	public function unico($id) {
		$array = array();
		$array['title'] = 'SEAGI - Viatura '.$id;
		$array['subtitle'] = 'SEAGI - VTR - GMD';

		$this->loadEspecificTemplate('Painel/Viaturas/unico', $array, 'viaturas');
	}

}