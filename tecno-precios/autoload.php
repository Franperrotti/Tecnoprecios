<?php

require_once("helpers.php");
require_once("clases/Usuario.php");
require_once("clases/Validador.php");
require_once("clases/ArmarRegistro.php");
require_once("clases/Autentificador.php");
require_once("clases/BaseDatos.php");
require_once("clases/BaseJson.php");
require_once("clases/Hashear.php");

$validar = new Validador();
$registro = new ArmarRegistro();
$Json = new BaseJson("usuarios.json");
Autentificador::iniciarSession();




?>