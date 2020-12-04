<?php
//session_start();

require File::build_path(array('controller', 'ControllerGeneral.php'));
require File::build_path(array('controller', 'ControllerDechet.php'));
require File::build_path(array('controller', 'ControllerMeteo.php'));

if (isset($_GET['controller'])){
    $controller = "Controller" . ucfirst($_GET['controller']);
}
else{
    $controller = "ControllerGeneral";
}
if(isset($_GET['lang'])){
    $lang=$_GET['lang'];
}
else{
    $lang='FR';
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
else{
    $action = "readAll";
}

$controller::$action();

