<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CT_Film extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('MD_Film');
        $this->load->model('MD_Type');
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
		$data['film'] = $this->MD_Film->listFilmType(); 
        $data['type'] = $this->MD_Type->listAll();
		$this->viewer('/film',$data);
	}	
    public function addFilm(){
        $this->MD_Film->insertAll($_POST['type'],$_POST['nom'],$_POST['duree'],$_POST['synopsis']);
        redirect('CT_Film/');
    }
    public function updateFilm(){
        $this->MD_Film->update($_POST['id'],$_POST['type'],$_POST['nom'],$_POST['duree'],$_POST['synopsis']);
        redirect('CT_Film/');
    }
    public function screening(){
        $data['seance'] = $this->MD_Film->listScreenMovie();
		$this->viewer('/seance',$data);
    }
}
