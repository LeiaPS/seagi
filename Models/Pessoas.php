<?php
namespace Models;

use \Core\Model;

class Pessoas extends Model {

	public function tudo() {
		$array = array();

		$sql = "SELECT *,
		(SELECT nome FROM logradouros WHERE logradouros.id = pessoas.id_logradouro) AS logradouro,
		(SELECT nome FROM estados_civis WHERE estados_civis.id = pessoas.id_estado_civil) AS estado_civil,
		(SELECT nome FROM graduacoes WHERE graduacoes.id = pessoas.id_graduacao) AS graduacao,
		(SELECT nome FROM funcoes WHERE funcoes.id = pessoas.id_funcao) AS funcao,
		(SELECT nome FROM estado WHERE estado.id = pessoas.id_uf_naturalidade) AS uf_naturalidade,
		(SELECT uf FROM estado WHERE estado.id = pessoas.id_uf_naturalidade) AS uf_naturalidade_sigla,
		(SELECT nome FROM estado WHERE estado.id = pessoas.id_uf_residencial) AS uf_residencial,
		(SELECT uf FROM estado WHERE estado.id = pessoas.id_uf_residencial) AS uf_residencial_sigla,
		(SELECT nome FROM cidade WHERE cidade.id = pessoas.id_cidade_naturalidade) AS cidade_naturalidade,
		(SELECT nome FROM cidade WHERE cidade.id = pessoas.id_cidade_residencial) AS cidade_residencial,
		(SELECT nome FROM bairros WHERE bairros.id = pessoas.id_bairro) AS bairro
		FROM pessoas ORDER BY nome_guerra";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function unico($id) {

		$sql = "SELECT *,
		(SELECT nome FROM logradouros WHERE logradouros.id = pessoas.id_logradouro) AS logradouro,
		(SELECT nome FROM estados_civis WHERE estados_civis.id = pessoas.id_estado_civil) AS estado_civil,
		(SELECT nome FROM graduacoes WHERE graduacoes.id = pessoas.id_graduacao) AS graduacao,
		(SELECT nome FROM funcoes WHERE funcoes.id = pessoas.id_funcao) AS funcao,
		(SELECT nome FROM estado WHERE estado.id = pessoas.id_uf_naturalidade) AS uf_naturalidade,
		(SELECT uf FROM estado WHERE estado.id = pessoas.id_uf_naturalidade) AS uf_naturalidade_sigla,
		(SELECT nome FROM estado WHERE estado.id = pessoas.id_uf_residencial) AS uf_residencial,
		(SELECT uf FROM estado WHERE estado.id = pessoas.id_uf_residencial) AS uf_residencial_sigla,
		(SELECT nome FROM cidade WHERE cidade.id = pessoas.id_cidade_naturalidade) AS cidade_naturalidade,
		(SELECT nome FROM cidade WHERE cidade.id = pessoas.id_cidade_residencial) AS cidade_residencial,
		(SELECT nome FROM bairros WHERE bairros.id = pessoas.id_bairro) AS bairro
		FROM pessoas WHERE id = :id ORDER BY nome_guerra";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
			return $array;
		}

		return '';
	}

}