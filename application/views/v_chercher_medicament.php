<?php
$list = array('Code :', 'Nom Commercial :', 'Famille :', 'Composition :', 'Desciption :', 'Contre Indications :');
echo "<table class='visiteur'>";
for($i = 0; $i < sizeof($list);$i++) {
    echo "<tr><th>".$list[$i]."</th><td>".$medicament[$i]."</td></tr>";
}
echo "</table>";