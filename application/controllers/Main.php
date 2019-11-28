<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->model('main_m');
	}
	public function index()
	{
		$this->load->view('main_v');
	}

	public function generate() {

		$longUrl = $_POST['url'];
		$shortUrl = $result = bin2hex(random_bytes(3));
		$data['set_url'] = $this->main_m->set_url($shortUrl, $longUrl);

		$result = "http://" . $_SERVER['HTTP_HOST'] . "/$shortUrl";

		print "<a href=\"$result\">$result</a>";
	}

}
