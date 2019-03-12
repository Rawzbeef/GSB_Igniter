<?php
class Connexion extends CI_Controller {
    public function index() {   
        $data['titre'] = "Connexion";

        $this->load->view('v_head', $data);
        $this->load->view('v_menu', $data); //pour faciliter l'accès en attendant que ce soit codé, a supprimer quand terminé
        $this->load->view('v_connexion');
    }
}