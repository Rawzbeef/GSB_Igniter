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
            $query = $this->db->query("SELECT VIS_MATRICULE FROM visiteur V WHERE VIS_NOM = '$login' AND VIS_DATEEMBAUCHE = '$mdp'");
            $row = $query->row();
            if($query->num_rows() > 0) {
                $id = $row->VIS_MATRICULE;
            }
            return $id;
        }

        //
        public function getRapports($vId) {
            $query = $this->db->query("SELECT RAP_NUM FROM rapport_visite WHERE VIS_MATRICULE = '$vId'");
            foreach ($query->result() as $row) {
                $rapports[$row->RAP_NUM] = $row->RAP_NUM;
            }
            return $rapports;
        }

        public function getInfoRapport($vId, $rId) {
            $query = $this->db->query("SELECT P.PRA_NUM, RAP_DATE, RAP_MOTIF, RAP_BILAN FROM rapport_visite RV, praticien P WHERE P.PRA_NUM = RV.PRA_NUM AND VIS_MATRICULE = '$vId' AND RAP_NUM = '$rId'");
            foreach ($query->result() as $row) {
                $rapport[] = $row->PRA_NUM;
                $rapport[] = $row->RAP_DATE;
                $rapport[] = $row->RAP_MOTIF;
                $rapport[] = $row->RAP_BILAN;
            }
            return $rapport;
        }

        public function getEchantillons($vId, $rId) {
            $query = $this->db->query("SELECT MED_NOMCOMMERCIAL, OFF_QTE, O.MED_DEPOTLEGAL FROM offrir O, medicament M WHERE M.MED_DEPOTLEGAL = O.MED_DEPOTLEGAL AND VIS_MATRICULE = '$vId' AND RAP_NUM = '$rId'");
            $echantillons = array();
            $i = 0;
            foreach ($query->result() as $row) {
                $echantillons[$i][] = $row->MED_NOMCOMMERCIAL;
                $echantillons[$i][] = $row->OFF_QTE;
                $echantillons[$i][] = $row->MED_DEPOTLEGAL;
                $i++;
            }
            return $echantillons;
        }

        public function ajoutEchantillon($vId, $rId, $mId, $qte) {
            $sql = "INSERT INTO offrir (VIS_MATRICULE, RAP_NUM, MED_DEPOTLEGAL, OFF_QTE) VALUES ('$vId', '$rId', '$mId', '$qte')";
            $this->db->query($sql);
        }

        public function supprEchantillon($login, $idr, $idm) {
            $req = "DELETE FROM offrir WHERE VIS_MATRICULE = '$login' AND RAP_NUM = '$idr' AND MED_DEPOTLEGAL = '$idm'";
            $this->db->query($req);
        }

        public function modifierNewRapport($login, $num, $praticien, $date, $motif, $bilan) {
            $req = "UPDATE rapport_visite SET PRA_NUM = '$praticien', RAP_DATE = '$date', RAP_BILAN = '$bilan', RAP_MOTIF = '$motif' WHERE VIS_MATRICULE = '$login' AND RAP_NUM = '$num'";
            $this->db->query($req);
        }

        public function ajouterNewRapport($login, $num, $praticien, $date, $motif, $bilan) {
            $req = "INSERT INTO rapport_visite (VIS_MATRICULE, RAP_NUM, PRA_NUM, RAP_DATE, RAP_BILAN, RAP_MOTIF) VALUES ('$login', '$num', '$praticien', '$date', '$motif', '$bilan')";
            $this->db->query($req);

        }

        public function nbRapports($login) {
            $query = $this->db->query("SELECT COUNT(RAP_NUM) AS nbRapport FROM rapport_visite WHERE VIS_MATRICULE = '$login'");
            $row = $query->row();
            return $row->nbRapport;
        }
}


