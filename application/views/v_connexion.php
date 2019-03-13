<div align="center">
<?php

    if(isset($this->session->login)){
       echo('Vous etes connecté'.$this->session->login);
    }
    else{
        echo form_open('index.php/Connexion/login');
        $attributes = array('placeholder'=>'login');
        echo form_input('login', '', $attributes);
        $attributes = array('placeholder'=>'mdp');
        echo form_password('mdp', '', $attributes);
        echo form_submit('valider', 'Valider');
        echo form_close();
    }
?>
</div>