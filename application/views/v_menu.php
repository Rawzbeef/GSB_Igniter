<nav>
    <ul><?php
        //lien test
        if($titre == "nom de la page") {
            echo "<li><a class='active' href=''>lien test</a></li>";
        }
        else {
            echo "<li><a href=''>lien test</a></li>";
        }
        //Connexion
        if($titre == "Connexion") {
            echo "<li><a class='active' href=''>Connexion</a></li>";
        }
        else {
            echo "<li><a href=''>Connection</a></li>";
        }
    ?></ul>
</nav>
