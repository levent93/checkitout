<?php

class Admin_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function vrati_tabelu($tabela) {
		$this->db->select('*, k.ime izmenio');
		$this->db->from('korisnici k');
		$this->db->join($tabela, "k.id = $tabela.korisnik_id");
		return $this->db->get()->result();
	}
	
	public function obrisi($tabela = NULL, $id = NULL) {
		$data = array(
			'id' => $id
		);
		$this->db->delete($tabela, $data);
	}
	
	public function upisi($tabela, $vrednosti) {
		$this->db->insert($tabela, $vrednosti);
	}
	
	public function izmeni($tabela, $id, $vrednosti) {
		$this->db->where('id', $id);
		$this->db->update($tabela, $vrednosti);
	}

}
