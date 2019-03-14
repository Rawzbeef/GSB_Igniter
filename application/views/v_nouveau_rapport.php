<?php
    echo "<table class='visiteur'>".form_open('index.php/Rapport/ajouter');
    echo "<tr><th>Praticien :</th><td>".form_dropdown('praticien', $praticiens)."</td></tr>";
    echo "<tr><th>Date Rapport :</th><td><input type='date' name='date'></td></tr>";
    echo "<tr><th>Motif Visite :</th><td>".form_input('motif')."</td></tr>";
    echo "<tr><th>Bilan :</th><td>".form_textarea('bilan')."</td></tr>";
    echo "<tr><td>".form_submit('', 'Ajouter')."</td></tr>";
    echo form_close()."</table>";