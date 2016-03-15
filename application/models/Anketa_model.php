<?php

class Anketa_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function uvecaj($id = NULL) {
		$args = array(
			'id' => $id
		);
		$trenutno = $this->db->get_where('odgovori', $args)->row();
		$broj = $trenutno->glasovi;
		$broj++;
		$data = array(
			'glasovi' => $broj
		);
		$this->db->where($args);
		$this->db->update('odgovori', $data);
	}

	public function vrati() {
		return $this->db->get('anketa_sistem')->row();
	}
	
	public function vrati_ankete() {
		return $this->db->get('ankete')->result();
	}
	
	public function vrati_odgovore($id) {
		$args = array(
			'anketa_id' => $id
		);
		return $this->db->get_where('odgovori', $args)->result();
	}
	
	public function vrati_sve_odgovore() {
		return $this->db->get('odgovori')->result();
	}

}
