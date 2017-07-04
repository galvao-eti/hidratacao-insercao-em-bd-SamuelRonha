<?php
include('../Model/DBase.php');
require '../Model/Produto.php';
require '../Model/Usuario.php';


$user = new Usuario();
$product = new Produto();

$object = ['email' => "samuelronha@gmail.com", 'senha' => "123"];

$p = new DBase();

$user->save($object, $p);

$object = ['nome' => "Abobora", 'valor' => "10.99"];
$product->save($object, $p);

