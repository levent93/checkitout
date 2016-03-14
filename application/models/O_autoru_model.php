<?php

class O_autoru_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function vrati_sadrzaj() {
		return $this->db->get('o_autoru')->result();
	}

}
