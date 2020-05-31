<?php
namespace Models;

use \Core\Model;

class Logradouros extends Model {

	public function tudo() {
		$array = array();

		$sql = "SELECT * FROM logradouros ORDER BY nome";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function unico($id) {

		$sql = "SELECT * FROM logradouros WHERE id = :id ORDER BY nome";
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