<?php 
use App\core\Core;
require "../vendor/autoload.php";
require "config.php";

session_start();


$core = new Core();
$core->start();