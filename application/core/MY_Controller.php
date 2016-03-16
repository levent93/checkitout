<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('menu_model');
	}

	public function front_end($view, $args = array()) {
		$data = array();
		$data['meni'] = $this->menu_model->vrati_linkove();

		$this->load->view('header', $args);
		$this->load->view('menu', $data, $args);
		$this->load->view($view, $args);
		$this->load->view('footer', $args);
	}

}
