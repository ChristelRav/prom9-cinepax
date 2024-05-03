<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CT_Seance extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('MD_Film');
        $this->load->model('MD_Seance');
    }
    private function viewer($page,$data)
    {
        $v = array(
            'page'=>$page,
            'data'=>$data
        );
        $this->load->view('template/basepage',$v);
    }
	public function index(){ 
        $data['seance'] = $this->MD_Seance->getProjectionFilm($_GET['idfilm'],$_GET['datepf']);
        $this->viewer('/reservation',$data);
	}	
    public function booking(){ 
        $this->viewer('/payer',array());
	}	
}
