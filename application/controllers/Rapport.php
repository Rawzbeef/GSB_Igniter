<?php 
class Rapport extends CI_Controller {
    public function index() { 
        if(isset($this->session->login)) {
            $this->load->database();

            $this->load->helper('form');
            $this->load->helper('html');

            $this->load->model('bdd');
            
            $data['titre'] = "Modification Rapport";

            $this->load->view('v_head', $data);
            $this->load->view('v_menu', $data);

            $data['rapports'] = $this->bdd->getRapports($this->session->login);

            $this->load->view('v_rapport', $data);
        }
        else {
            header('Location: http://127.0.0.1/GSB/'); 
        }
    }

    public function afficher() {
        if(isset($this->session->login)) {
            $this->load->database();

            $this->load->helper('form');
            $this->load->helper('html');

            $this->load->model('bdd');

            $data['rapports'] = $this->bdd->getInfoRapport($this->session->login, $this->input->post['rapport']);
            $this->load->view('v_afficher_rapport', $data);
        }
        else {
            header('Location: http://127.0.0.1/GSB/'); 
        }
    }
}