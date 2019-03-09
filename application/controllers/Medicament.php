<?php
class Medicament extends CI_Controller {
    public function index() {   

        $this->load->database();
        
        $this->load->library('table');

        $this->load->helper('form');

        $this->load->model('bdd');

        $data['titre'] = "Medicament";

        $mId = $this->bdd->getMedicamentsIDs();
        $medicaments = $this->bdd->getMedicaments();
        $taille = sizeof($mId);
        $i = 0;
        while($i < $taille) {
            $data['medicaments'][$mId[$i]] = $medicaments[$i];
            $i++;
        }

        $this->load->view('v_head', $data);
        $this->load->view('v_menu', $data);
        $this->load->view('v_medicament', $data);
    }
    
    public function rechercher() {
        $this->index();
        $data['medicament'] = $this->bdd->getInfoMedicament($this->input->post('medicament'));
        $this->load->view('v_chercher_medicament', $data);
        
    }
}