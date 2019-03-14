<nav>
    <ul><?php
        //Connexion (pour tester, c'est pas logique un lien vers connexion)
        /*
        if($titre == "Connexion") {
            echo "<li><a class='active'>Connexion</a></li>";
        }
        else {
            echo "<li><a href='/GSB/index.php/Connexion/index'>Connexion</a></li>";
        }
        */
        //Visiteurs
        if($titre == "Visiteur") {
            echo "<li><a class='active'>Visiteur</a></li>";
        }
        else {
            echo "<li><a href='/GSB/index.php/Visiteur/'>Visiteur</a></li>";
        }

        //Praticiens
        if($titre == "Praticien") {
            echo "<li><a class='active'>Praticien</a></li>";
        }
        else {
            echo "<li><a href='/GSB/index.php/Praticien/'>Praticien</a></li>";
        }

        //Médicaments
        if($titre == "Medicament") {
            echo "<li><a class='active'>Médicaments</a></li>";
        }
        else {
            echo "<li><a href='/GSB/index.php/Medicament/'>Médicaments</a></li>";
        }

        //Rapports
        if($titre == "Rapport") {
            echo "<li><a class='active' href='/GSB/index.php/Rapport/'>Rapports</a></li>";
        }
        else {
            echo "<li><a href='/GSB/index.php/Rapport/'>Rapports</a></li>";
        }
        
        echo "<li><a href='/GSB/index.php/Connexion/logout'>Déconnexion</a></li>";
        
    ?></ul>
</nav>
<div style='margin-left:20%'>

