<?php
class Connexion extends CI_Controller {
    public function index() {   

        $this->load->database();

        $this->load->helper('form');

        $this->load->model('bdd');
        
        $data['titre'] = "Connexion";

        $this->load->view('v_head', $data);
        $this->load->view('v_menu', $data); //pour faciliter l'accès en attendant que ce soit codé, a supprimer quand terminé
        $this->load->view('v_connexion');
    }


    public function login() {
        $this->load->model('bdd');
        $login = validerConnexion($this->input->post('login'), $this->input->post('mdp'));
        if(isset($login)) {
        $this->index();
        $_SESSION['login'] = $login;
        }
        else{
            $this->index();
            $data['error'] = 'Erreur de connexion';
        }
    }
}