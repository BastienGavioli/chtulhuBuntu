<?php
//session_start();

require File::build_path(array('controller', 'ControllerGeneral.php'));
require File::build_path(array('controller', 'ControllerDechet.php'));

if (isset($_GET['controller'])){
    $controller = "Controller" . ucfirst($_GET['controller']);
}
else{
    $controller = "ControllerGeneral";
}
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
else{
    $action = "readAll";
}

$controller::$action();

