<?php 
class Rapport extends CI_Controller {
    public function index() { 
        
        $this->load->database();

        $this->load->helper('form');
        $this->load->helper('html');

        $this->load->model('bdd');

        session_start();
        
        $data['titre'] = "Modification Rapport";

        $this->load->view('v_head', $data);
        $this->load->view('v_menu', $data);

        $data['rapports'] = $this->bdd->getRapports($_SESSION['login']);

        $this->load->view('v_rapport', $data);

    }

    public function afficher() {
        session_start();

        $this->load->database();

        $this->load->helper('form');
        $this->load->helper('html');

        $this->load->model('bdd');

        $data['rapports'] = $this->bdd->getInfoRapport($_SESSION['login'], $this->input->post['rapport']);
        $this->load->view('v_afficher_rapport', $data);

    }
}