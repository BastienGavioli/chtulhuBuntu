<?php

require_once File::build_path(array('model', 'Model.php'));

class ModelSQL
{

    public static function prepareRequest($sql)
    {
        try {
            $request = Model::$pdo->prepare($sql);
        } catch (PDOException $e) {
            if (Conf::getDebug()) {
                echo $e->getMessage();
            } else {
                echo 'Error Append <a href="index.php">Back to home page</a>';
            }
            die();
        }
        return $request;
    }

    public static function executeRequest($request, $values, $model)
    {
        $request->execute($values);
        $request->setFetchMode(PDO::FETCH_CLASS, $model);
        $tab = $request->fetchAll();
        if (empty($tab))
            return false;
        return $tab;
    }

}