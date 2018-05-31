<?php

session_start();

require_once("/home/mathieu1/public_html/miseEnProd/model/VerifForm.php");
require_once("/home/mathieu1/public_html/miseEnProd/model/Membre.php");
require_once("/home/mathieu1/public_html/miseEnProd/model/MembresManager.php");
require_once('/home/mathieu1/public_html/miseEnProd/model/Manager.php');
require_once('/home/mathieu1/public_html/miseEnProd/model/GifManager.php');

error_reporting(E_ALL);

$_ENV = parse_ini_file('.env');
// var_export($_ENV);
// exit();

?>