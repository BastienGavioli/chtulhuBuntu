<?php

$ROOT_FOLDER = __DIR__ . DIRECTORY_SEPARATOR;
require $ROOT_FOLDER . 'lib' . DIRECTORY_SEPARATOR . 'File.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');

require File::build_path(array('controller', 'routeur.php'));
