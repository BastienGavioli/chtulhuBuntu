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
    <link rel="shortcut icon" type="image/ico" href="uri" />

 
    <meta name="HandheldFriendly" content="true">

</head>

<body>
<?php File::build_path(array("assets", "[images/georgewashingtondesaprouve.png]")); ?>
<?php
require File::build_path(array("view", $controller, "$view.php"));;
?>

<footer>

</footer>

</body>
</html>