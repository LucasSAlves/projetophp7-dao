<?php

require_once("config.php");

/*Carrega um usuário
$root = new Usuario();
$root->loadbyId(4);
echo $root;*/

/*Carrega uma lista de usuários
$lista = Usuario::getList();

echo json_encode($lista);
*/

//Carrega uma lista de usuarios buscando pelo o login
/*$search = Usuario::search("Lu");
echo json_encode($search);
*/

//Carrega um usuário usuando o login e a senha 
$usuario = new Usuario();
$usuario->login("Lucas", "1234567890");

echo $usuario;
?>