<?php
namespace Models;

use \Core\Model;

class Cidades extends Model {

	public function tudo() {
		$array = array();

		$sql = "SELECT * FROM cidade ORDER BY nome";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
	public function tudoPorEstado($id) {
		$array = array();

		$sql = "SELECT * FROM cidade WHERE estado = :id ORDER BY nome";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
	public function unico($id) {
		$array = array();

		$sql = "SELECT * FROM cidade WHERE id = :id ORDER BY nome";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

}