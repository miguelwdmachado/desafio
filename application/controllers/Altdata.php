<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'controllers/Datachange.php');

class Altdata extends CI_Controller {

   function __construct() {
   parent::__construct();
      $this->load->model('altdata_m', '', TRUE);

   }

	public function index()
   {
      // Load View
      
		$data['page_title']  = "NOVA ALTERAÇÃO DE DATA";

      $this->load->view('altdata', $data);
   }
    
   public function gravar_informacoes()
   {
      $dtini = $this->input->post('dtini');   
      $op = $this->input->post('op');  
      $value = $this->input->post('valor');
      
      $chamada = new Datachange();
      $dtfim = $chamada->processa($dtini, $op, $value);
   
      $this->load->helper('date');
      date_default_timezone_set("America/Sao_Paulo");
      $this->altdata_m->id = '';
      $this->altdata_m->dt_inicial = date("Y-m-d H:i:s",strtotime(str_replace('/','-',$dtini)));
      $this->altdata_m->alteracao = $value;
      $this->altdata_m->operacao = $op;
      $this->altdata_m->dt_final = date("Y-m-d H:i:s",strtotime(str_replace('/','-',$dtfim)));

      $this->altdata_m->inserir($this);

      redirect(base_url());
      
   }

}
