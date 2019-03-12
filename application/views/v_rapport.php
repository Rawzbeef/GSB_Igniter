<?php
    $attributes = array('class' => 'section');
    echo form_open('index.php/Rapport/rechercher', $attributes);
    echo "Sélectionnez un rapport : ".form_dropdown('rapport', $rapports);
    echo form_submit('afficher', 'Afficher');
    echo form_close();

    echo br().heading('OU', 1).br();

    echo form_open('index.php/Rapport/nouveau', $attributes);
    echo form_submit('nouveau', 'Nouveau Rapport');
    echo form_close();