<?php

require_once 'vendor/autoload.php';
$produto1 = new \App\model\ProdutoDao();
$produto = new \App\model\Produto();
$produto1->read($produto);

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}



//Vaçidacao do post
if(isset($_POST['excluir'])){

  $produto1->delete($_GET['id']);

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';