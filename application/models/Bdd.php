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

    public function getMedicaments() {
        $query = $this->db->query('SELECT MED_DEPOTLEGAL, MED_NOMCOMMERCIAL FROM medicament');
        foreach ($query->result() as $row) {
            $medicaments[] = $row->MED_NOMCOMMERCIAL;
        }
        return $medicaments;
    }

    public function getMedicamentsIDs() {
        $query = $this->db->query('SELECT MED_DEPOTLEGAL, MED_NOMCOMMERCIAL FROM medicament');
        foreach ($query->result() as $row) {
            $mId[] = $row->MED_DEPOTLEGAL;
        }
        return $mId;
    }

    public function getInfoMedicament($mId) {
        $query = $this->db->query("SELECT MED_DEPOTLEGAL, MED_NOMCOMMERCIAL, FAM_LIBELLE, MED_COMPOSITION, MED_EFFETS, MED_CONTREINDIC FROM medicament M, famille F WHERE M.FAM_CODE = F.FAM_CODE AND MED_DEPOTLEGAL = '$mId';");
        foreach ($query->result() as $row) {
            $medicament[] = $row->MED_DEPOTLEGAL;
            $medicament[] = $row->MED_NOMCOMMERCIAL;
            $medicament[] = $row->FAM_LIBELLE;
            $medicament[] = $row->MED_COMPOSITION;
            $medicament[] = $row->MED_EFFETS;
            $medicament[] = $row->MED_CONTREINDIC;
        }
        return $medicament;
    }

}


