<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Anketa extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Anketa_model');
	}

	public function anketa_sistemi() {
		$naziv = $this->input->post('naziv');
		$this->Anketa_model->uvecaj($naziv);
		$red = $this->Anketa_model->vrati();
		$ukupno = $red->android + $red->apple + $red->windows + $red->linux;
		$procenat = $ukupno / 100;
		$data = array();
		$data['apple'] = round($red->apple / $procenat, 1) . '%';
		$data['android'] = round($red->android / $procenat, 1) . '%';
		$data['windows'] = round($red->windows / $procenat, 1) . '%';
		$data['linux'] = round($red->linux / $procenat, 1) . '%';
		$podaci = json_encode($data);
		echo $podaci;
	}

}
