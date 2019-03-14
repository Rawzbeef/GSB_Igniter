

<?php
    echo form_open('index.php/Rapport/modifier')."<table class='visiteur'>";
    echo "<tr><th>Praticien :</th><td>".form_dropdown('praticien', $praticiens, $rapport[0])."</td></tr>";
    echo "<tr><th>Date Rapport :</th><td><input type='date' value='".$rapport[1]."' name='date'></td></tr>";
    echo "<tr><th>Motif Visite :</th><td>".form_input('motif', $rapport[2])."</td></tr>";
    echo "<tr><th>Bilan :</th><td>".form_textarea('bilan', $rapport[3]).form_hidden('idr', $rId)."</td></tr>";

    $table1 = form_open('index.php/Rapport/ajoutEch').form_dropdown('idm', $medicaments).form_input('qte').form_submit('addM','+').form_hidden('idr', $rId).form_close();
    
    $table2 = form_open('index.php/Rapport/supprEch')."<table><tr><td>Médicament</td><td>Quantité</td><td></td></tr>";
    foreach($echantillons as $ech) {
        $table2 = $table2."<tr><td>".$ech[0]."</td><td>".$ech[1]."</td><td>".form_submit('supprM','-').form_hidden('idm', $ech[2]).form_hidden('idr', $rId)."</td></tr>";
    }

    $table2 = $table2."</table>".form_close();
    echo "<tr><th>Offres d'échantillon :</th><td>$table2</td></tr>";
    echo "<tr><td>".form_submit('', 'Modifer')."</td></tr>";
    echo "</table>".form_close();

    echo $table1;