<div style='margin-left:20%'>
<?php
    $attributes = array('class' => 'section');
    echo form_open('index.php/Medicament/rechercher', $attributes);
    echo form_dropdown('medicament', $medicaments);
    echo form_submit('recherche', 'Rechercher');
    echo form_close();
    