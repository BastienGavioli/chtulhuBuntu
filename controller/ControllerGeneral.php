<?php

class ControllerGeneral
{


    public static function readAll() {
        if(isset($_GET['lang'])){
            $lang=$_GET['lang'];
        }
        else{
            $lang='FR';
        }
        $controller = "general";
        $view='index';
        $pagetitle='Index';
        require File::build_path(array("view",$lang,"view.php"));
    }

    public static function apropos() {
        if(isset($_GET['lang'])){
            $lang=$_GET['lang'];
        }
        else{
            $lang='FR';
        }
        $customcss = "apropos";
        $controller = "general";
        $view='apropos';
        $pagetitle='Index';
        require File::build_path(array("view",$lang,"view.php"));
    }
}
