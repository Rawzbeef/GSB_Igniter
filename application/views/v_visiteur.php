<div style='margin-left:20%'>
<?php
    $attributes = array('class' => 'section');
    echo form_open('index.php/Visiteur/rechercher', $attributes);
    echo form_dropdown('visiteur', $visiteurs);
    echo form_submit('recherche', 'Rechercher');
    echo form_close();