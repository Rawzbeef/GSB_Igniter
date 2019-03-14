<?php
class Connexion extends CI_Controller {
    public function index() {

        $this->load->database();

        $this->load->helper('form');
        $this->load->helper('html');

        $this->load->model('bdd');
        
        $data['titre'] = "Connexion";

        $this->load->view('v_head', $data);
        if(isset($this->session->login)){
            $this->load->view('v_menu', $data);
        }
        
        $this->load->view('v_connexion');
    }


    public function login() {
            $this->load->database();
            $this->load->model('bdd');

            $login = $this->bdd->validerConnexion($this->input->post('login'), $this->input->post('mdp'));
            if(isset($login)) {
                $this->session->set_userdata('login', $login);
                header('Location: http://127.0.0.1/GSB/'); 
            }
            else{
                $this->index();
                $data['error'] = 'Erreur de connexion';
            }
    }

    public function logout(){
        $this->session->unset_userdata('login');
        $this->index();
    }
}