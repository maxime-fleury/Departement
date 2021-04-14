<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/font.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="images/favicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <title>
        <?php 
        $page = explode("/",$_SERVER['SCRIPT_NAME']);
        $page = end($page);
            echo $titles[$page];//titre magique fonctionne sur toute les page grace à config.php
        ?>
    </title>
</head>

<body>
    <nav><div id="logoandslogant">
            <img id="logo" alt="Logo de la Seine-et-Marne" src="seineetmarnelogo.png"></img>
            <div id="slogant">77 Le département
                <div id="slogant_petit">
                    Plus que la Seine, la Marne aussi !  
                </div>
            </div>
        </div>
        <div id="nav_links">
            <a href="index.php">Acceuil</a><a href="actu.php">Actualités</a><a href="lieux.php">Lieux incontournables</a><a href="marche.php">Marchés</a>
        </div>
        <div style="display:none;" id="nav_links_mobile">
            <a href="index.php">Acceuil</a><a href="actu.php">Actualités</a><a href="lieux.php">Lieux incontournables</a><a href="marche.php">Marchés</a>
        </div>
    </nav>
    <img id="burgerMenu" alt="Menu burger image" width="50" height="50" src="img/menuburger.png" >