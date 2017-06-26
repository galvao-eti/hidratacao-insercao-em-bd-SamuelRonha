<?php
/*require '../../class/Usuario.php';
require '../../class/Admin.php';

$a = new Admin(new Usuario());*/
require '../model/Produto.php';
require '../model/Usuario.php';
use model\Usuario;

$u = new Usuario('Samuel', '123');


$u->save();

