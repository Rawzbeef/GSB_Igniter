<?php

class Bdd extends CI_Model {

    //Requetes concernant les visiteurs et leurs infos
        //Requete pour le nom
        public function getVisiteurs() {
            $query = $this->db->query('SELECT VIS_MATRICULE, VIS_NOM FROM visiteur');
            foreach ($query->result() as $row) {
                $visiteurs[] = $row->VIS_NOM;
            }
            return $visiteurs;
        }

        //Requete pour l'ID
        public function getVisiteursIDs() {
            $query = $this->db->query('SELECT VIS_MATRICULE, VIS_NOM FROM visiteur');
            foreach ($query->result() as $row) {
                $vId[] = $row->VIS_MATRICULE;
            }
            return $vId;
        }

        //Requete pour les informations
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

    //Requetes concernant les praticiens et leurs infos
        //Requete pour le nom
        public function getPraticiens() {
            $query = $this->db->query('SELECT PRA_NUM, PRA_NOM FROM praticien');
            foreach ($query->result() as $row) {
                $praticiens[] = $row->PRA_NOM;
            }
            return $praticiens;
        }

        //Requete pour l'ID
        public function getPraticiensIDs() {
            $query = $this->db->query('SELECT PRA_NUM, PRA_NOM FROM praticien');
            foreach ($query->result() as $row) {
                $pId[] = $row->PRA_NUM;
            }
            return $pId;
        }

        //Requete pour les informations
        public function getInfoPraticien($pId) {
            $query = $this->db->query("SELECT PRA_NOM, PRA_PRENOM, PRA_ADRESSE, PRA_CP, PRA_VILLE, PRA_COEFNOTORIETE, TYP_LIBELLE FROM praticien P, engine_praticien E WHERE E.TYP_CODE = P.TYP_CODE AND PRA_NUM = '$pId';");
            foreach ($query->result() as $row) {
                $praticien[] = $row->PRA_NOM;
                $praticien[] = $row->PRA_PRENOM;
                $praticien[] = $row->PRA_ADRESSE;
                $praticien[] = $row->PRA_CP;
                $praticien[] = $row->PRA_VILLE;
                $praticien[] = $row->PRA_COEFNOTORIETE;
                $praticien[] = $row->TYP_LIBELLE;
            }
            return $praticien;
        }

    //Requetes concernant les médicaments et leurs infos
        //Requete pour le nom
        public function getMedicaments() {
            $query = $this->db->query('SELECT MED_DEPOTLEGAL, MED_NOMCOMMERCIAL FROM medicament');
            foreach ($query->result() as $row) {
                $medicaments[] = $row->MED_NOMCOMMERCIAL;
            }
            return $medicaments;
        }

        //Requete pour l'ID
        public function getMedicamentsIDs() {
            $query = $this->db->query('SELECT MED_DEPOTLEGAL, MED_NOMCOMMERCIAL FROM medicament');
            foreach ($query->result() as $row) {
                $mId[] = $row->MED_DEPOTLEGAL;
            }
            return $mId;
        }

        //Requete pour les informations
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

        public function validerConnexion($login, $mdp) {
            $id = null;
            $query = $this->db->query("SELECT VIS_MATRICULE FROM visiteur V WHERE $login = VIS_MATRICULE AND $mdp = VIS_DATEEMBAUCHE");
            $row = $query->row();
            if($query->num_rows() > 0) {
                $id = $row->VIS_MATRICULE;
            }
            return $id;
        }

}


