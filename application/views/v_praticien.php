<div style='margin-left:20%'>
<?php
    $attributes = array('class' => 'section');
    echo form_open('index.php/Praticien/rechercher', $attributes);
    echo form_dropdown('praticien', $praticiens);
    echo form_submit('recherche', 'Rechercher');
    echo form_close();