<?php
class Conf {

    static private $databases = array(
        'hostname' => 'localhost',
        'database' => 'chtulhUbuntu',
        'login' => 'pi',
        'password' => 'root!'
    );

    static public function getLogin() {

        return self::$databases['login'];
    }

    static public function gethostname() {
        return self::$databases['hostname'];
    }
    static public function getpassword() {
        return self::$databases['password'];
    }
    static public function getdatabase() {
        return self::$databases['database'];
    }
}

