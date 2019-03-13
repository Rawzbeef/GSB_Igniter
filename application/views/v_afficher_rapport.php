

<?php
    echo form_open();
    echo "<tr><th>Praticien :</th><td>".form_dropdown()."</td></tr>";
    echo "<tr><th>Date Rapport :</th><td><input type='date' name='' id=''></td></tr>";
    echo "<tr><th>Motif Visite :</th><td>".form_input()."</td></tr>";
    echo "<tr><th>Bilan :</th><td>".form_textarea()."</td></tr>";
    echo "<tr><th>Offres d'échantillon :</th><td>"."</td></tr>";
    echo form_close();