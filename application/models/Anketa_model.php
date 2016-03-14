<?php

class Anketa_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function uvecaj($naziv = NULL) {
		$this->load->database();
		$trenutno = $this->db->select($naziv)->get('anketa_sistem')->row();
		$broj = $trenutno->$naziv;
		$broj++;
		$data = array(
			$naziv => $broj
		);
		$this->db->update('anketa_sistem', $data);
	}
	
	public function vrati() {
		return $this->db->get('anketa_sistem')->row();
	}
}
