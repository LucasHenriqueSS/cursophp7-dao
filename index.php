<?php

require_once("config.php");

// CARREGA UM USUARIO ESPECIFICO
/*$usuario1 = new Usuario();
$usuario1->loadById(5);
echo $usuario1;*/

//CARREA UMA LISTA DE USUARIOS
//$usuarios =  Usuario::getList();
//echo json_encode($usuarios);


// CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
//$search = Usuario::search("lu");
//echo json_encode($search);


$busca = new Usuario();

$busca->login("lula", "bolsonaro");

echo $busca;





?>