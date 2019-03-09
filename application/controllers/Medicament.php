<?php
class Medicament extends CI_Controller {
    public function index() {   
        $data['titre'] = "Medicament";

        $this->load->view('v_head', $data);
        $this->load->view('v_menu', $data);
	}
}