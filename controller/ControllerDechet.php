<?php

require File::build_path(array("model","ModelDechet.php"));
class ControllerDechet
{
    public static function readAll() {
        $tab = ModelDechet::selectAll();
        $controller = "dechet";
        $view='list';
        $pagetitle='Liste des déchets';
        require File::build_path(array("view","view.php"));
    }
    /*
    public static function read(){
        $v = ModelDechet::selectByPrimary($_GET['id']);

        if ($v == false){
            error();
        }
        else{
            $controller = "dechet";
            $view='detail';
            $pagetitle='Détails du Dechet';
            require File::build_path(array("view","view.php"));
        }
    }
    */
    public static function error(){
        $controller = "dechet";
        $view='error';
        $pagetitle='Erreur de Dechet';
        require File::build_path(array("view","view.php"));
    }

    public static function delete(){
        ModelDechet::delete($_GET['id']);

        $tab = ModelDechet::selectAll();
        $controller = "dechet";
        $view='deleted';
        $pagetitle='Dechet supprimée';
        require File::build_path(array("view","view.php"));
    }

    public static function choixDechet(){
        $customcss = "dechet";
        $view='choixDechet';
        $controller = "dechet";
        $pagetitle='Choisir un déchet';
        require File::build_path(array("view","view.php"));
    }


    public static function create(){
        $readonly_required="required";
        $updated_created = "created";
        $customcss = "dechet";
        $view='update';
        $controller = "dechet";
        $pagetitle='Ajouter un déchet';
        require File::build_path(array("view","view.php"));
    }

    public static function created(){
        $Dechet1 = new ModelDechet(null, $_GET["position"], $_GET["type"],$_GET["quantite"], $_GET["visuel"]);

        var_dump($Dechet1);

        $a = $Dechet1->save();

        if ($a === false){
            echo htmlspecialchars("Un Dechet avec ce idDechet existe déjà dans la base de donnée.");
        }
        else{
            $view='update';
            $controller = "dechet";
            $pagetitle='Dechet enregistrée !';
            require File::build_path(array("view","view.php"));
        }
    }


    public static function update(){
        $v = ModelDechet::selectByPrimary($_GET['id']);
        $position = $v->getPosition();
        $type = $v->getType();
        $quantite = $v->getQuantite();
        $readonly_required="readonly";
        $updated_created = "updated";

        $controller = "dechet";
        $view='update';
        $pagetitle='Editer un Dechet';
        require File::build_path(array("view","view.php"));
    }

    public static function updated(){
        $Dechet1 = new ModelDechet( $_GET["position"], $_GET["type"],$_GET["quantite"], null);

        $a = $Dechet1->edit();

        if ($a === false){
            echo htmlspecialchars("Un Dechet avec ce idDechet existe déjà dans la base de donnée.");
        }
        else{
            $tab = ModelDechet::selectAll();
            $view='created';
            $controller = "dechet";
            $pagetitle='Dechet enregistrée';
            require File::build_path(array("view","view.php"));
        }

    }
}