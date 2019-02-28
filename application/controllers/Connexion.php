<?php
class Connexion extends CI_Controller {
    public function index()
	{   
        $GLOBALS['titre'] = "Connexion";

        $this->load->view('v_head');
        $this->load->view('v_menu');
        $this->load->view('v_connexion');
	}
}