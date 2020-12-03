<?php

require_once File::build_path(array('config', 'Conf.php'));
require_once File::build_path(array('model', 'ModelSQL.php'));

class Model
{

    static public $pdo;

    static private $debug = True;

    static public function getDebug() {
        return self::$debug;
    }

    static public function Init()
    {
        $hostname = Conf::gethostname();
        $database_name = Conf::getdatabase();
        $login = Conf::getLogin();
        $password = Conf::getpassword();

        try{

            self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password,

                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage(); // affiche un message d'erreur
            } else {
                echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
            }
            die();
        }
    }

//principe de fonctionnement et code ci dessous récupéré du projet ficheJDR par Langlet Alexis ; Belliard Antoine ; Berthaud Claire ; Subsol Thomas

    //--SHARED REQUEST-------------------------------------

//  SELECTION

    public static function selectAll()
    {
        $tableName = " ".static::$table_name." ";
        $class_name = static::$class_name;

        try{
            $query = "SELECT * FROM $tableName";

            $rep = Model::$pdo->query($query);

            $rep->setFetchMode(PDO::FETCH_CLASS, $class_name);
            return $rep->fetchAll();

        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public static function selectByPrimary($primary_value) {
        $table_name = static::$table_name;
        $class_name = static::$class_name;
        $primary_key = static::$primary;

        $sql = "SELECT * from $table_name WHERE $primary_key=:pk";
        $req = ModelSQL::prepareRequest($sql);

        $values = array("pk" => $primary_value,);

        return ModelSQL::executeRequest($req, $values, $class_name)[0];
    }


    public static function selectByAny($key, $value){
        $data = array($key => $value);
        return static::selectByMany($data);
    }


    public static function selectByMany($data){
        $table_name = static::$table_name;
        $class_name = static::$class_name;

        $request = "";
        foreach ($data as $key => $value){
            $request = $request.$key."=:".$key.",";
        }

        $request = rtrim($request, ",");

        $sql = "SELECT * from $table_name WHERE $request";
        $req = ModelSQL::prepareRequest($sql);

        return ModelSQL::executeRequest($req, $data, $class_name);
    }

//  DELETE

    public static function delete($primary)
    {
        $table_name = static::$table_name;
        $primary_key = static::$primary;

        $sql = "DELETE FROM $table_name WHERE $primary_key=:pk";
        $req = ModelSQL::prepareRequest($sql);

        $values = array(
            "pk" => $primary,
        );
        $req->execute($values);
    }

//  UPDATE AND CREATE

    public function update()
    {
        $data = $this->getData();

        $table_name = static::$table_name;
        $primary_key = static::$primary;

        $request = "";
        foreach ($data as $key => $value){
            $request = $request.$key."=:".$key.",";
        }

        $request = rtrim($request, ","); //delete the ending coma.

        $sql = "Update $table_name SET $request WHERE $primary_key=:$primary_key";
        $req = ModelSQL::prepareRequest($sql);
        $req->execute($data);
    }

//  SAVE

    public function save(){
        $table_name = static::$table_name;

        $data = $this->getData();

        $request = "( ";
        foreach ($data as $key => $value){
            $request = $request.":".$key.", ";
        }

        $request = rtrim($request, ", ");
        $request = $request." )";

        $sql = "INSERT INTO $table_name VALUES $request";

        $req = ModelSQL::prepareRequest($sql);

        $req->execute($data);
    }

}

Model::Init();