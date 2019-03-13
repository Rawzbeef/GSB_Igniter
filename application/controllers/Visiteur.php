<?php
class Visiteur extends CI_Controller {
    public function index() {   
        if(isset($this->session->login)) {
            $this->load->database();

            $this->load->helper('form');

            $this->load->model('bdd');

            $data['titre'] = "Visiteur";

            $vId = $this->bdd->getVisiteursIDs();
            $visiteurs = $this->bdd->getVisiteurs();
            $taille = sizeof($vId);
            $i = 0;
            while($i < $taille) {
                $data['visiteurs'][$vId[$i]] = $visiteurs[$i];
                $i++;
            }
        
            $this->load->view('v_head', $data);
            $this->load->view('v_menu', $data);
            $this->load->view('v_visiteur', $data);
        }
    }
    
    public function rechercher() {
        if(isset($this->session->login)) {
            $this->index();
            $data['visiteur'] = $this->bdd->getInfoVisiteur($this->input->post('visiteur'));
            $this->load->view('v_chercher_visiteur', $data);
        }

    }

}