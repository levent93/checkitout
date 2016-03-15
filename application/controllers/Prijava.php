<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prijava extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('prijava_model');
		$this->load->library('form_validation');
	}

	public function index() {
		$data = array();
		$data['content'] = 'check IT out je online prodavnica tehnike. Uglavnom pametnih telefona i laptop računara.';
		$data['keywords'] = 'check it out, prodavnica, onlajn prodavnica, telefoni, laptopovi';
		$data['title'] = 'Prijava';
		$this->front_end('prijava', $data);
	}

	public function prijavi() {
		$this->form_validation->set_rules('ime', 'Korisnicko ime', 'required|alpha_numeric|regex_match[/^[a-zA-Z0-9]{3,15}$/]');
		$this->form_validation->set_rules('lozinka', 'Lozinka', 'required');
		$this->form_validation->set_message('required', 'Polje {field} je obavezno!');
		$this->form_validation->set_message('alpha_numeric', 'Polje {field} sme da sadrzi samo slova i brojeve!');
		$this->form_validation->set_message('regex_match', 'Polje {field} nije u dobrom formatu');
		$this->form_validation->set_error_delimiters('', '');

		if ($this->form_validation->run()) {
			$ime = $this->input->post('ime');
			$lozinka = $this->input->post('lozinka');
			$red = $this->prijava_model->ima_u_bazi($ime);
			if (!$red) {
				$data = array();
				$data['g_ime'] = 'Ne postoji korisnik u bazi';
				$data['g_lozinka'] = 'Ne postoji korisnik u bazi';
				$this->front_end('prijava', $data);
			} else {
				if (password_verify($lozinka, $red->lozinka)) {
					$this->session->ime = $red->ime;
					$this->session->email = $red->email;
					$this->session->uloga = $red->naziv;
					$this->session->id = $red->id;
					header('Location:' . base_url());
				} else {
					$data = array();
					$data['g_lozinka'] = 'Netacna sifra';
					$this->front_end('prijava', $data);
				}
			}
		} else {
			$this->front_end('prijava');
		}
	}

	public function odjavi() {
		$this->session->unset_userdata('ime');
		$this->session->unset_userdata('email');
		$this->session->sess_destroy();
		redirect('');
	}

}
