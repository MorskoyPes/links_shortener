<?php

class Main_m extends CI_Model
{
		function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_url()
	{
		$url_link = $this->uri->segment(1);
		$query = $this->db->query("SELECT * FROM shorts WHERE short = '$url_link' LIMIT 1");
		return $query;
	}
	function set_url($shortUrl, $longUrl)
	{
		$result = $this->db->query("INSERT INTO shorts (short, full) VALUES ('$shortUrl', '$longUrl')");
	}


}


 ?>