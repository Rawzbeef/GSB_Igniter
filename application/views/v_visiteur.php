<?php

if(isset($_POST['chercher'])) {
    echo form_open();
    echo form_dropdown();
    echo form_close();
}
else {
    $attributes = array('class' => 'section');
    echo form_open('', $attributes);
    $query = $this->db->query('SELECT VIS_NOM FROM visiteur');
    foreach ($query->result() as $row) {
            $visiteurs[] = $row->VIS_NOM;
    }
    echo form_dropdown($visiteurs);
    echo form_close();
}