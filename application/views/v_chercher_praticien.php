<?php
$list = array('Nom :', 'Prenom :', 'Adresse :', 'Code Postal :', 'Ville :', 'Secteur :', 'Spécialité :');
echo "<table class='visiteur'>";
for($i = 0; $i < sizeof($list);$i++) {
    echo "<tr><th>".$list[$i]."</th><td>".$praticien[$i]."</td></tr>";
}
echo "</table>";