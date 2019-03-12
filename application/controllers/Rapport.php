<?php 
class Rapport extends CI_Controller {
    public function index() {   
        $data['titre'] = "Modification Rapport";

        $this->load->view('v_head', $data);
        $this->load->view('v_menu', $data);
        $this->load->view('v_rapport');

    }
}