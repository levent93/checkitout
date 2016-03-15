<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class O_autoru extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('O_autoru_model');
	}

	public function index() {
		$data = array();
		$data['content'] = 'check IT out je online prodavnica tehnike. Uglavnom pametnih telefona i laptop računara.';
		$data['keywords'] = 'check it out, prodavnica, onlajn prodavnica, telefoni, laptopovi';
		$data['title'] = 'O autoru';
		$data['tabela'] = $this->O_autoru_model->vrati_sadrzaj();
		$this->front_end('autor', $data);
	}

}
