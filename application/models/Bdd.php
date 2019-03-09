<?php

class Bdd extends CI_Model {

    public function getVisiteurs() {
        $query = $this->db->query('SELECT VIS_MATRICULE, VIS_NOM FROM visiteur');
        foreach ($query->result() as $row) {
            $visiteurs[] = $row->VIS_NOM;
        }
        return $visiteurs;
    }

    public function getVisiteursIDs() {
        $query = $this->db->query('SELECT VIS_MATRICULE, VIS_NOM FROM visiteur');
        foreach ($query->result() as $row) {
            $vId[] = $row->VIS_MATRICULE;
        }
        return $vId;
    }

    public function getInfoVisiteur($vId) {
        $query = $this->db->query("SELECT VIS_NOM, Vis_PRENOM, VIS_ADRESSE, VIS_CP, VIS_VILLE, SEC_CODE FROM visiteur V WHERE VIS_MATRICULE = '$vId';");
        foreach ($query->result() as $row) {
            $visiteur[] = $row->VIS_NOM;
            $visiteur[] = $row->Vis_PRENOM;
            $visiteur[] = $row->VIS_ADRESSE;
            $visiteur[] = $row->VIS_CP;
            $visiteur[] = $row->VIS_VILLE;
            $visiteur[] = $row->SEC_CODE;
        }
        return $visiteur;
    }

}


