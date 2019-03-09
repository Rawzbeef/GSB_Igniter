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
    ?></ul>
</nav>

<?php
/* ici le menu sans active pour mieux copier-coller
        echo "<li><a href='/GSB/index.php/Connexion/index'>Connexion</a></li>";
        echo "<li><a href='/GSB/index.php/Visiteur/index'>Visiteur</a></li>";
*/
