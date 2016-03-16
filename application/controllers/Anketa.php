<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Anketa extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Anketa_model');
	}

	public function anketiraj() {
		$anketa_id = $this->input->post('anketa_id');
		$odgovor_id = $this->input->post('odgovor_id');
		$this->Anketa_model->uvecaj($odgovor_id);
		$odgovori = $this->Anketa_model->vrati_odgovore($anketa_id);
		$suma = 0;
		$data = array();
		foreach ($odgovori as $odgovor) {
			$suma += $odgovor->glasovi;
		}
		$procenat = $suma / 100;
		foreach ($odgovori as $odgovor) {
			$data[$odgovor->id] = round($odgovor->glasovi /= $procenat, 1) . '%';
		}
//		var_dump($data);
		$podaci = json_encode($data);
		echo $podaci;
	}

}
