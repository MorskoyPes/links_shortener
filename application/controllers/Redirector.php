<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redirector extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('main_m');
	}

	public function index()
	{
		$data['get_url'] = $this->main_m->get_url();

		if ($data['get_url']->num_rows() == 0) {
			die("404 error");
		}

		$full_url = $data['get_url']->row()->full;
		header("Location: $full_url");
	}

}
