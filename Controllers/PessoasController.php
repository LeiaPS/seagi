<?php
namespace Controllers;

use \Core\Controller;

class PessoasController extends Controller {

	public function index() {
		$array = array();
		$array['title'] = 'SEAGI - Pessoal';
		$array['subtitle'] = 'SEAGI - Pessoal';
		$array['pessoas'] = $this->pe->tudo();

		$this->loadEspecificTemplate('Painel/Pessoas/lista', $array, 'pessoas');
	}
	
	public function adicionar() {
		$array = array();
		$array['title'] = 'SEAGI - Pessoal - Adicionar';
		$array['subtitle'] = 'SEAGI - Pessoal';

		$this->loadEspecificTemplate('Painel/Pessoas/adicionar', $array, 'pessoas');
	}
	public function unico($id) {
		$array = array();
		$array['pessoa'] = $this->pe->unico($id);
		$array['title'] = 'SEAGI - '.$array['pessoa']['nome_guerra'];
		$array['subtitle'] = 'SEAGI - Pessoa - GMD';
		$array['pessoa'] = $this->pe->unico($id);

		$this->loadEspecificTemplate('Painel/Pessoas/unico', $array, 'pessoas');
	}
	public function editar($id) {
		$array = array();
		$array['pessoa'] = $this->pe->unico($id);
		$array['title'] = 'SEAGI - Editando: GM '.$array['pessoa']['nome_guerra'];
		$array['subtitle'] = 'SEAGI - Pessoa - GMD';
		$array['estados'] = $this->es->tudo();
		$array['cidades'] = $this->ci->tudo();
		$array['logradouros'] = $this->lo->tudo();
		$array['estados_civis'] = $this->ec->tudo();

		$this->loadEspecificTemplate('Painel/Pessoas/editar', $array, 'pessoas');
	}

	public function relatorio($id) {
		$array = array();
		$array['pessoa'] = $this->pe->unico($id);

		$this->loadView('Painel/Pessoas/relatorio', $array);
	}
	public function cidadeJson($id) {
		$data = $this->ci->unico($id);
		$data = $this->he->utf8_conversao($data);
		echo json_encode($data, JSON_UNESCAPED_UNICODE);
		exit;
	}
	public function cidadesPorEstadoJson($id) {
		$data = $this->ci->tudoPorEstado($id);
		$data = $this->he->utf8_conversao($data);
		echo json_encode($data, JSON_UNESCAPED_UNICODE);
		exit;
	}

}