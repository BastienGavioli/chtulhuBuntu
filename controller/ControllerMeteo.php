<?php

class ControllerMeteo
{
    public static function read(){
        if(isset($_GET['lang'])){
            $lang=$_GET['lang'];
        }
        else{
            $lang='FR';
        }
        $view='meteo';
        $controller = "meteo";
        $pagetitle='Meteo';
        require File::build_path(array("view",$lang,"view.php"));
    }
}