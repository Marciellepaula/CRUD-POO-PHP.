<?php

require_once 'vendor/autoload.php';
$produto1 = new \App\model\ProdutoDao();
$produto = new \App\model\Produto();
$produto1->read($produto);

//foreach($produtoDao->read() as $produto):
//echo $produto['nome'];
//endforeach;

$mensagem = '';
if (isset($_GET['status'])) {
  switch ($_GET['status']) {
    case 'success':
      $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
      break;

    case 'error':
      $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
      break;
  }
}

$resultados = '';
foreach ($produto1->read() as $produtox) {
  $resultados .= '<tr>
                      <td>' . $produtox['id'] . '</td> 
                      <td>' . $produtox['nome'] . '</td>
                      <td>' . $produtox['descricao'] . '</td>
                      <td>
                        <a href="editar.php?id=' . $produtox['id'] . '">
                          <button type="button" class="btn btn-primary">Editar</button>
                         </a>
                        <a href="excluir.php?id=' . $produtox['id'] . '">
                         <button type="button" class="btn btn-danger">Excluir</button>
                         </a>
                        </td>
                 </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma vaga encontrada
                                                       </td>
                                                    </tr>';

?>
<main>

  <?= $mensagem ?>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Nova vaga</button>
    </a>
  </section>

  <section>

    <table class="table bg-light mt-1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Descrição</th>
        </tr>
      </thead>
      <tbody>
        <?= $resultados ?>
      </tbody>
    </table>

  </section>


</main>