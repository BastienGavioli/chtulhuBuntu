<!DOCTYPE html>
<html lang="fr-fr">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title><?php echo $pagetitle; ?></title>

    <meta name="description" content="description">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="shortcut icon" type="image/ico" href="/assets/icon.png"/>
    <link rel="stylesheet" type="text/css" href="/CSS/general.css">
    <?php if(isset($customcss)){
        echo '<link rel="stylesheet" type="text/css" href="/CSS/'.$customcss.'.css">';
    } ?>
    <meta name="HandheldFriendly" content="true">

</head>

<body>
<header>
    <div id="divLogo">
        <img alt="Logo" src="/assets/icons/jour.png" id="logo">
        <!DOCTYPE html>
        <html>
        <body>
        <script type="text/javascript">
            var logo = document.getElementById('logo');
            var now = new Date();
            var hour = now.getHours();
            printTime(hour);

            function printTime(hour){
                if(hour>=0 && hour<8 || hour>=20 && hour<=23) {
                    logo.src = "/assets/icons/nuit.png";
                }
                else if(hour>=8 && hour<16){
                    logo.src = "/assets/icons/jour.png";
                }
                else if(hour>=16 && hour<20){
                    logo.src = "/assets/icons/crepuscule.png";
                }
            }
        </script>
    </div>
        <nav>
    <ul id="menu">
        <li><a href="index.php">Index</a></li>
        <li><a href="index.php?controller=meteo&action=read&lang=EN">Meteo</a></li>
        <li><a href="index.php?controller=dechet&action=choixDechet&lang=EN">Add a trash</a></li>
        <li><a href="index.php?controller=general&action=apropos&lang=EN">About us</a></li>
    </ul>
</nav>

<div id="burger">
    <img alt="burger" id="imgBurger" src="../../assets/burger.png">
    <ul id="menuBurger">
        <li><a href="index.php">Index</a></li>
        <li><a href="index.php?controller=meteo&action=read&lang=EN">Meteo</a></li>
        <li><a href="index.php?controller=dechet&action=choixDechet&lang=EN">Add a trash</a></li>
        <li><a href="index.php?controller=general&action=apropos&lang=EN">About us</a></li>
    </ul>
</div>
</header>

<?php
require File::build_path(array("view", $lang , $controller, "$view.php"));;
?>

<footer>
    <?php if(isset($_GET['lang'])){
        if($_GET['lang']!='FR'){
            echo "<a href='index.php?lang=FR'>French</a>";
        }
        else{
            echo "<a href='index.php?lang=EN'>Anglais</a>";
        }
    }
    else{
        echo "<a href='index.php?lang=EN'>Anglais</a>";
    }
    ?>
</footer>

</body>
</html>