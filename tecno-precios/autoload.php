<?php

require_once("helpers.php");
require_once("clases/Usuario.php");
require_once("clases/Validador.php");
require_once("clases/ArmarRegistro.php");
require_once("clases/Autentificador.php");
require_once("clases/BaseDatos.php");
require_once("clases/BaseJson.php");
require_once("clases/Hashear.php");
require_once("clases/BaseMYSQL.php");
require_once("clases/Query.php");


$host = "localhost";
$db = "tecnoprecios";
$usuario = "root";
$password = "";
$puerto = "3306";
$charset = "utf8mb4";

$pdo = BaseMYSQL::conexion($host,$db,$usuario,$password,$puerto,$charset);


$validar = new Validador();
$registro = new ArmarRegistro();
$Json = new BaseJson("usuarios.json");
Autentificador::iniciarSession();




?>