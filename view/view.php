<!DOCTYPE html>
<html lang="fr-fr">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $pagetitle; ?></title>

    <meta name="description" content="description">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="shortcut icon" type="image/ico" href="/assets/icon.png"/>
    <link rel="stylesheet" type="text/css" href="/CSS/general.css">
    <meta name="HandheldFriendly" content="true">

</head>

<body>
<header>

    <div id="divLogo">
        <img alt="Logo" id="logo" src="/assets/icon.png">
    </div>

    <nav>
        <ul id="menu">
            <li><a href="accueil.html">Accueil</a></li>
            <li><a href="autrepage.html">autrepage(temp)</a></li>
            <li><a href="possiblesousmenu.html">tempsousmenu</a>
                <ul class="sousMenuNR">
                    <li><a href="1.html">1</a></li>
                    <li><a href="2.html">2</a></li>
                    <li><a href="3.html">3</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="burger">
        <img alt="burger" id="imgBurger" src="/assets/burger.png">
        <ul id="menuBurger">
            <li><a href="accueil.html">Accueil</a></li>
            <li><a href="autrepage.html">autrepage(temp)</a></li>
            <li><a href="possiblesousmenu.html">tempsousmenu</a>
                <ul class="sousMenuNR">
                    <li><a href="1.html">1</a></li>
                    <li><a href="2.html">2</a></li>
                    <li><a href="3.html">3</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>

<?php
require File::build_path(array("view", $controller, "$view.php"));;
?>
<footer>

</footer>

</body>
</html>