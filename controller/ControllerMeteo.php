<?php

class ControllerMeteo
{
    public static function read(){
        $view='meteo';
        $controller = "meteo";
        $pagetitle='La météo proche de vous !';
        require File::build_path(array("view","view.php"));
    }
}