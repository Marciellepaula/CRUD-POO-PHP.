


<main>



  <section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>

  <h2 class="mt-3">Titulo</h2>

  <form method="POST">

    <div class="form-group">
      <label>Título</label>
      <input type="text" class="form-control" name="nome" value="<?=$produto->getNome()?>">
    </div>

    <div class="form-group">
      <label>Descrição</label>
      <textarea class="form-control" name="descricao" rows="5"><?=$produto->getDescricao()?></textarea>
    </div>


    <div class="form-group">
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>

  </form>

 
</main>