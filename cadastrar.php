<?php

require_once 'vendor/autoload.php';

define('TITLE','Cadastrar vaga');

$produto1 = new \App\model\ProdutoDao();
$produto = new \App\model\Produto();
$produto1->read();

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['descricao'])){

  $produto->setNome($_POST['nome']); // seta a variavel
  $produto->setDescricao($_POST['descricao']);
  $produto1->create($produto);

  header('location: index.php?status=success');
  exit;
}
require_once 'includes/header.php';
include_once 'includes/formulario.php';
require_once 'includes/footer.php';

