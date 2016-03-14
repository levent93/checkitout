<?php

class Menu_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function vrati_linkove() {
		$this->load->database();
		return $this->db->get('meni')->result();
	}

}
