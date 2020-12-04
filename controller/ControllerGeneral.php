<?php

class ControllerGeneral
{

public static function readAll() {
        $controller = "general";
        $view='index';
        $pagetitle='Acceuil';
        require File::build_path(array("view","view.php"));
    }
}
