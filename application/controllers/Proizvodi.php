<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Proizvodi extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Proizvodi_model');
		$this->load->library('pagination');
	}

	public function telefoni($brand = NULL, $filteri = array()) {
		
	}

	public function lap_topovi($brand = NULL, $filteri = array()) {
		
	}

}
