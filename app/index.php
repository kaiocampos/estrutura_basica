<?php 
session_start();

//require "../vendor/autoload.php";
require "config/config.php";
require "config/autoload.php";





$core = new Core();
$core->start();