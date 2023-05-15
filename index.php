<?php

require_once("config.php");

$usuario1 = new Usuario();

$usuario1->loadById(5);

echo $usuario1;




?>