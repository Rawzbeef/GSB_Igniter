<?php
    if(isset($rapports)) {
        $attributes = array('class' => 'section');
        echo form_open('index.php/Rapport/afficher', $attributes);
        echo "<p style='margin: 2px;padding: 5px'>Sélectionnez un rapport : </p>".form_dropdown('rapport', $rapports);
        echo form_submit('afficher', 'Afficher');
        echo form_close();

        echo br().heading('OU', 1, array('style' => 'margin-left : 80px')).br();
    }
    echo form_open('index.php/Rapport/nouveau', $attributes);
    echo form_submit('nouveau', 'Nouveau Rapport');
    echo form_close();