<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pocetna extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Proizvodi_model');
		$this->load->library('pagination');
	}

	public function index() {
		$data = array();
		$data['content'] = 'check IT out je online prodavnica tehnike. Uglavnom pametnih telefona i laptop računara.';
		$data['keywords'] = 'check it out, prodavnica, onlajn prodavnica, telefoni, laptopovi';
		$data['title'] = 'Početna';
		
		$config = array();
		$config['base_url'] = base_url() . 'pocetna/index';
		$config['uri_segment'] = 3;
		$config['per_page'] = 6;
		$config['total_rows'] = $this->Proizvodi_model->broj_redova();

		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['tabela'] = $this->Proizvodi_model->vrati_proizvode($config["per_page"], $page);

		$this->front_end('proizvodi_prikaz', $data);
	}

}
