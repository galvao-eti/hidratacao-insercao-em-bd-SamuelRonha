<?php
/*require '../../class/Usuario.php';
require '../../class/Admin.php';

$a = new Admin(new Usuario());*/
require '../Model/Produto.php';
require '../Model/Usuario.php';


use model\Usuario;

$u = new Usuario('Samuel', '123');

$object = ["nome@email", "senha"];



$u->hydrator($object);

//
//$u->save();

