<?php

class Prijava_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function ima_u_bazi($ime) {
		$this->load->database();
		return $this->db->select('*')
						->join('uloge u', 'uloga_id = u.id')
						->where('ime', $ime)
						->get('korisnici')
						->row();
	}

}
