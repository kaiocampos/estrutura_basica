<?php
require 'enviroment.php';

$config = array();

if (ENVIROMENT == 'development') {
    define("BASE_URL", "http://localhost/estrutura_basica/app/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    define("BASE_URL", "http://www.meusite.com.br");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}
global $db;
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'],$config['dbpass']);
   

} catch (Throwable $th) {
    throw $th;
    exit;
}