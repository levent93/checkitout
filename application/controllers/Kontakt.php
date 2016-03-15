<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontakt extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index() {
		$data = array();
		$data['content'] = 'check IT out je online prodavnica tehnike. Uglavnom pametnih telefona i laptop računara.';
		$data['keywords'] = 'check it out, prodavnica, onlajn prodavnica, telefoni, laptopovi';
		$data['title'] = 'Kontakt';
		$this->front_end('kontakt', $data);
	}
	
	public function kontaktiraj() {
		$this->form_validation->set_rules('naslov', 'Naslov poruke', 'required|regex_match[/^[a-zA-Z0-9\s]{3,60}$/]');
		$this->form_validation->set_rules('poruka', 'Poruka koju želite da pošaljete', 'required|regex_match[/^[a-zA-Z0-9\s]{3,500}$/]');
		$this->form_validation->set_rules('email', 'Vaša e-mail adresa', 'required|valid_email');
		$this->form_validation->set_message('required', 'Polje {field} je obavezno!');
		$this->form_validation->set_message('valid_email', 'Polje {field} mora da bude u ispravnom formatu');
		$this->form_validation->set_message('regex_match', 'Polje {field} nije u dobrom formatu');
		$this->form_validation->set_error_delimiters('', '');
		
		if ($this->form_validation->run()) {
			$naslov = $this->input->post('naslov');
			$email = $this->input->post('email');
			$poruka = $this->input->post('poruka');

			$this->load->library('email');

			$this->email->from($email, '');
			$this->email->to('levent.leki.93@gmail.com');
			//$this->email->cc('another@another-example.com');
			//$this->email->bcc('them@their-example.com');

			$this->email->subject($naslov);
			$this->email->message($poruka);

			if ($this->email->send()) {
				$data['je_poslato'] = TRUE;
				$this->front_end('kontakt', $data);
			} else {
				$data['je_poslato'] = FALSE;
				$this->front_end('kontakt', $data);
			}
			
		} else {
			$data = array();
			$data['content'] = 'check IT out je online prodavnica tehnike. Uglavnom pametnih telefona i laptop računara.';
			$data['keywords'] = 'check it out, prodavnica, onlajn prodavnica, telefoni, laptopovi';
			$data['title'] = 'Kontakt';
			$this->front_end('kontakt');
		}
	}

}
