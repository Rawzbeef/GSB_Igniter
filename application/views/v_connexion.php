<div align="center">
<?php

    if(!isset($_SESSION['login'])){
        echo form_open('index.php/Connexion/login');
        $attributes = array('placeholder'=>'login');
        echo form_input('login', '', $attributes);
        $attributes = array('placeholder'=>'mdp');
        echo form_password('mdp', '', $attributes);
        echo form_submit('valider', 'Valider');
        echo form_close();
    }
    else{
        echo('Vous etes connecté');
    }
?>
</div>