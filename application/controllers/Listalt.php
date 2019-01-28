<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listalt extends CI_Controller {

function __construct() {
parent::__construct();

    $this->load->model('altdata_m', '', TRUE);
}

public function index()
{
    $data['page_title']  = "LISTA ALTERAÇÕES";
    $data['alteradas'] = $this->altdata_m->get();
    $this->load->view('listalt',$data);

}

}
