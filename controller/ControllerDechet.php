<?php

require File::build_path(array("model","ModelDechet.php"));
class ControllerDechet
{
    public static function readAll() {
        $tab = ModelDechet::selectAll();
        $controller = "dechets";
        $view='list';
        $pagetitle='Liste des déchets';
        require File::build_path(array("view","view.php"));
    }

    public static function read(){
        $p = ModelDechet::selectByPrimary($_GET['id']);

        if ($p == false){
            error();
        }
        else{
            $controller = "Dechet";
            $view='detail';
            $pagetitle='Détails du Dechet';
            require File::build_path(array("view","view.php"));
        }
    }

    public static function error(){
        $view='error';
        $pagetitle='Erreur de Dechet';
        require File::build_path(array("view","view.php"));
    }

    public static function delete($id){
        ModelDechet::delete($id);

        $tab = ModelDechet::selectAll();
        $view='deleted';
        $pagetitle='Dechet supprimée';
        require File::build_path(array("view","view.php"));
    }


    public static function create(){
        $idDechet="";
        $position="";
        $type="";
        $quantite="";
        $readonly_required="required";
        $updated_created = "created";
        $view='update';
        $pagetitle='Ajouter un utilisateur';
        require File::build_path(array("view","view.php"));
    }

    public static function created(){
        $Dechet1 = new ModelDechet( $_GET["position"], $_GET["type"],$_GET["quantite"], null);

        $a = $Dechet1->save();

        if ($a === false){
            echo htmlspecialchars("Un Dechet avec ce idDechet existe déjà dans la base de donnée.");
        }
        else{
            $tab = ModelDechet::selectAll();
            $view='created';
            $pagetitle='Dechet enregistrée';
            require File::build_path(array("view","view.php"));
        }
    }


    public static function update($idDechet){
        $v = ModelDechet::select($idDechet);
        $position = $v->getPosition();
        $type = $v->getType();
        $quantite = $v->getQuantite();
        $readonly_required="readonly";
        $updated_created = "updated";

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
            $pagetitle='Dechet enregistrée';
            require File::build_path(array("view","view.php"));
        }

    }
}