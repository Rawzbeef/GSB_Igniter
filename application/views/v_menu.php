<nav>
    <ul><?php
        //lien test
        if($titre == "nom de la page") {
            echo "<li><a class='active' href=''>lien test</a></li>";
        }
        else {
            echo "<li><a href=''>lien test</a></li>";
        }
        //Connexion (pour tester, c'est pas logique un lien vers connexion)
        if($titre == "Connexion") {
            echo "<li><a class='active' href=''>Connexion</a></li>";
        }
        else {
            echo "<li><a href=''>Connection</a></li>";
        }
        //Visiteurs
        if($titre == "Visiteur") {
            echo "<li><a class='active'>Visiteur</a></li>";
        }
        else {
            echo "<li><a href=''>Connection</a></li>";
        }
    ?></ul>
</nav>

<?php
/* ici le menu sans active pour mieux copier-coller
        echo "<li><a href='127.0.0.1/GSB/index.php/Visiteur/index'>Visiteur</a></li>";
*/
