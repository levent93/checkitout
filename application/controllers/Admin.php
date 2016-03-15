<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->uloga !== 'Admin') {
			redirect(base_url());
		}
		$this->load->model('admin_model');
	}

	public function index() {
		$data = array();
		$data['content'] = 'check IT out je online prodavnica tehnike. Uglavnom pametnih telefona i laptop računara.';
		$data['keywords'] = 'check it out, prodavnica, onlajn prodavnica, telefoni, laptopovi';
		$data['title'] = 'Admin';
		$this->front_end('admin', $data);
	}

	public function tabela($tabela = NULL, $id = NULL) {
		$data['naziv'] = $tabela;
		$data['tabela'] = $this->admin_model->vrati_tabelu($tabela);
		$data['id'] = $id;
		$this->load->view($tabela, $data);
	}

	public function brisanje() {
		$naziv = $this->input->post('tabela');
		$id = $this->input->post('id');
		$this->admin_model->obrisi($naziv, $id);
		$data['tabela'] = $this->admin_model->vrati_tabelu($naziv);
		$this->load->view($naziv, $data);
	}

	public function upis($tabela) {
		$vrednosti = $this->input->post();
		$vrednosti['korisnik_id'] = $this->session->id;
		$vrednosti['vreme_izmene'] = time();
		$this->admin_model->upisi($tabela, $vrednosti);
		$data['tabela'] = $this->admin_model->vrati_tabelu($tabela);
		$this->load->view($tabela, $data);
	}

	public function izmena($tabela, $id) {
		$vrednosti = $this->input->post();
		$vrednosti['korisnik_id'] = $this->session->id;
		$vrednosti['vreme_izmene'] = time();
		$this->admin_model->izmeni($tabela, $id, $vrednosti);
		$data['tabela'] = $this->admin_model->vrati_tabelu($tabela);
		$this->load->view($tabela, $data);
	}

}
