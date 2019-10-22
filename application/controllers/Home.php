<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$nombre = "Alberto";
		$this->load->view('home/index', $nombre);
	}
}
