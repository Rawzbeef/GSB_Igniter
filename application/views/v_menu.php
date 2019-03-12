<nav>
    <ul><?php
        //Connexion (pour tester, c'est pas logique un lien vers connexion)
        if($titre == "Connexion") {
            echo "<li><a class='active' href='/GSB/index.php/Connexion/index'>Connexion</a></li>";
        }
        else {
            echo "<li><a href='/GSB/index.php/Connexion/index'>Connexion</a></li>";
        }

        //Visiteurs
        if($titre == "Visiteur") {
            echo "<li><a class='active' href='/GSB/index.php/Visiteur/index'>Visiteur</a></li>";
        }
        else {
            echo "<li><a href='/GSB/index.php/Visiteur/index'>Visiteur</a></li>";
        }

        //Praticiens
        if($titre == "Praticien") {
            echo "<li><a class='active' href='/GSB/index.php/Praticien/index'>Praticien</a></li>";
        }
        else {
            echo "<li><a href='/GSB/index.php/Praticien/index'>Praticien</a></li>";
        }

        //Médicaments
        if($titre == "Medicament") {
            echo "<li><a class='active' href='/GSB/index.php/Medicament/index'>Médicaments</a></li>";
        }
        else {
            echo "<li><a href='/GSB/index.php/Medicament/index'>Médicaments</a></li>";
        }
    ?></ul>
</nav>
<div style='margin-left:20%'>
<?php
/* ici le menu sans active pour mieux copier-coller
        echo "<li><a href='/GSB/index.php/Connexion/index'>Connexion</a></li>";
        echo "<li><a href='/GSB/index.php/Visiteur/index'>Visiteurs</a></li>";
        echo "<li><a href='/GSB/index.php/Medicament/index'>Médicaments</a></li>";
*/

