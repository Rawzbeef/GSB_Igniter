<?php
class Praticien extends CI_Controller {
    public function index() {   
        if(isset($_SESSION['login'])) {
            $this->load->database();

            $this->load->helper('form');

            $this->load->model('bdd');

            $data['titre'] = "Praticien";

            $pId = $this->bdd->getPraticiensIDs();
            $praticiens = $this->bdd->getPraticiens();
            $taille = sizeof($pId);
            $i = 0;
            while($i < $taille) {
                $data['praticiens'][$pId[$i]] = $praticiens[$i];
                $i++;
            }
        
            $this->load->view('v_head', $data);
            $this->load->view('v_menu', $data);
            $this->load->view('v_praticien', $data);
        }
    }
    
    public function rechercher() {
        if(isset($_SESSION['login'])) {
            $this->index();
            $data['praticien'] = $this->bdd->getInfoPraticien($this->input->post('praticien'));
            $this->load->view('v_chercher_praticien', $data);
        }

    }

}