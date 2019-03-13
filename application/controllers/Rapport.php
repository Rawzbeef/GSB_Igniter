<?php 
class Rapport extends CI_Controller {
    public function index() { 
        if(isset($this->session->login)) {
            $this->load->database();

            $this->load->helper('form');
            $this->load->helper('html');

            $this->load->model('bdd');
            
            $data['titre'] = "Rapport";

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

            $data['titre'] = "Rapport";

            $this->load->view('v_head', $data);
            $this->load->view('v_menu', $data);

            $data['rapport'] = $this->bdd->getInfoRapport($this->session->login, $this->input->post('rapport'));
            $pId = $this->bdd->getPraticiensIDs();
            $praticiens = $this->bdd->getPraticiens();
            $taille = sizeof($pId);
            $i = 0;
            while($i < $taille) {
                $data['praticiens'][$pId[$i]] = $praticiens[$i];
                $i++;
            }

            $mId = $this->bdd->getMedicamentsIDs();
            $medicaments = $this->bdd->getMedicaments();
            $taille = sizeof($mId);
            $i = 0;
            while($i < $taille) {
                $data['medicaments'][$mId[$i]] = $medicaments[$i];
                $i++;
            }
            
            $data['echantillons'] = $this->bdd->getEchantillons($this->session->login, $this->input->post('rapport'));
            $data['rId'] = $this->input->post('rapport');

            $this->load->view('v_afficher_rapport', $data);
        }
        else {
            header('Location: http://127.0.0.1/GSB/'); 
        }
    }

    public function ajoutEch() {
        if(isset($this->session->login)) {
            $rId = $this->input->post('idr');
            $mId = $this->input->post('idm');
            $qte = $this->input->post('qte');
            $this->bdd->AjoutEchantillon($this->session->login, $rId, $mId, $qte);
        }
        else {
            header('Location: http://127.0.0.1/GSB/'); 
        }
    }




    
    public function nouveau() {
        if(isset($this->session->login)) {
            $this->load->database();

            $this->load->helper('form');
            $this->load->helper('html');

            $this->load->model('bdd');

            $data['titre'] = "Rapport";

            $this->load->view('v_head', $data);
            $this->load->view('v_menu', $data);

            $pId = $this->bdd->getPraticiensIDs();
            $praticiens = $this->bdd->getPraticiens();
            $taille = sizeof($pId);
            $i = 0;
            while($i < $taille) {
                $data['praticiens'][$pId[$i]] = $praticiens[$i];
                $i++;
            }
            $this->load->view('v_nouveau_rapport', $data);
        }
        else {
            header('Location: http://127.0.0.1/GSB/'); 
        }
    }


    public function ajouter() {
        if(isset($this->session->login)) {
            $this->load->database();

            $this->load->helper('form');
            $this->load->helper('html');

            $this->load->model('bdd');

            $data['titre'] = "Rapport";

            $this->load->view('v_head', $data);
            $this->load->view('v_menu', $data);

            $login = $this->session->login;
            $num = $this->bdd->nbRapports($login) + 1 ;
            $praticien = $this->input->post('login');
            $date = $this->input->post('login');
            $motif = $this->input->post('motif');
            $bilan = $this->input->post('bilan');
            
            $ajout = $this->bdd->ajouterNewRapport($login, $num, $praticien, $date, $motif, $bilan);
            if(isset($ajout)) {
                $this->load->view('v_rapport');
            }
            else{
                $this->index();
                $data['error'] = 'Erreur de l\'ajout';
            }
        }
        else {
            header('Location: http://127.0.0.1/GSB/'); 
        }
    }
}