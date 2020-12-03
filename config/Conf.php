<?php
class Conf {

    static private $databases = array(
        'hostname' => '176.142.249.77',
        'database' => 'chtulhUbuntu',
        'login' => 'pi',
        'password' => 'root'
    );

    static private $debug = True;

    static public function getDebug() {
        return self::$debug;
    }

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

