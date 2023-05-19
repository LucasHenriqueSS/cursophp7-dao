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

//CARREGA UM USUARIO AUTENTICANDO LOGIN E SENHA
//$busca = new Usuario();
//$busca->login("lula", "bolsonaro");
//echo $busca;

/*criando um novo usuario pelo metodo construtor e inserindo no banco pelo metodo insert da classe Usuario.
$aluno = new Usuario("sadam", "rousseim");
$aluno->insert();
echo $aluno;*/

/*
ALTERAR UM USUARIO ESPECIFICO
$usuario = new Usuario();
$usuario->loadById(13);
$usuario->update("KAZUHIRA", "miller");
echo $usuario;*/

$user = new Usuario();

$user->loadById(8);

$user->del();

echo $user;



?>