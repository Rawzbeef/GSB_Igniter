<?php
class Visiteur extends CI_Controller {
    public function index()
	{   
        $this->load->database();

        $data['titre'] = "Visiteur";

        $this->load->view('v_head', $data);
        $this->load->view('v_menu', $data);
        $this->load->view('v_visiteur');
	}
}