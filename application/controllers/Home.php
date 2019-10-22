<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$nombre = "Alberto";
		$datos['headers'] = $this->load->view('template/header','', TRUE);
        $datos['footers'] = $this->load->view('template/footer','', TRUE);
        $this->load->view('home/index', $datos);
	}
}
