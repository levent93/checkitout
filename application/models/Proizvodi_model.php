<?php

class Proizvodi_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function vrati_proizvode($limit = NULL, $start = NULL) {
		return $query = $this->db->get('proizvodi', $limit, $start)->result();
	}

	public function broj_redova() {
		return $this->db->count_all('proizvodi');
	}

}
