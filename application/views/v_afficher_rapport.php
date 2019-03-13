

<?php
    echo form_open()."<table class='visiteur'>";
    echo "<tr><th>Praticien :</th><td>".form_dropdown('praticien', $praticiens, $rapport[0])."</td></tr>";
    echo "<tr><th>Date Rapport :</th><td><input type='date' value='".$rapport[1]."' name='date'></td></tr>";
    echo "<tr><th>Motif Visite :</th><td>".form_input('motif', $rapport[2])."</td></tr>";
    echo "<tr><th>Bilan :</th><td>".form_textarea('bilan', $rapport[3])."</td></tr>";

    $table1 = "<table><tr><td>Médicament</td><td>Quantité</td><td></td></tr>";
    $table = $table."<tr>".form_open('index.php/Rapport/ajoutEch')."<td>".form_dropdown('idm', $medicaments)."</td><td>".form_input('qte')."</td><td>".form_submit('addM','+').form_hidden('idr', $rId)."</td>".form_close()."</tr>";
    
    foreach($echantillons as $ech) {
        $table = $table.form_open()."<tr><td>".$ech[0]."</td><td>".$ech[1]."</td><td>".form_submit('supprM','-')."</td></tr>".form_hidden('idm', $ech[2]).form_hidden('idr', $rId).form_close();
    }

    $table = $table."</table>";

    echo "<tr><th>Offres d'échantillon :</th><td>$table</td></tr>";
    echo "<tr><td>".form_submit('', 'Modifer')."</td></tr>";
    echo "</table>".form_close();