<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $titre;?></title>
    <link rel="stylesheet" type="text/css" media="screen" href="/GSB/assets/style.css">
</head>
<body>
    <?php 
        if(isset($this->session->login)) {
           echo "<div class='nav'></div>";  
        }
    ?>
    <header>
        <img src="/GSB/assets/images/gsb.jpg" alt="GSB">
    </header>