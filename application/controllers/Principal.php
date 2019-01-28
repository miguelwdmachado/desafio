<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

    public $data = array();

	public function index()
    {
		// Load View
		$data['page_title']  = "DESAFIO DB SELLER";
        $this->load->view('principal', $data);
    }

}
