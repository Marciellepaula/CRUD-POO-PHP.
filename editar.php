<?php



require_once 'vendor/autoload.php';
$produto1 = new \App\model\ProdutoDao();
$produto = new \App\model\Produto();


//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}



$produto = $produto1->selectid($_GET['id']);





//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['descricao'])){

  $produto->setNome($_POST['nome']); // seta a variavel
  $produto->setDescricao($_POST['descricao']);
  $produto1->update($produto,$x);

  header('location: index.php?status=success');
  exit;
}


    



require_once 'includes/header.php';
require_once 'includes/formulario.php';
require_once 'includes/footer.php';