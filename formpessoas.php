<?php include('cabecalho.php'); ?>

<div class="container">

  <form action="inserepessoa.php" method="POST">
    <div class="form-group">
      <label >Nome</label>
      <input type="text" class="form-control"  name="nome" aria-describedby="emailHelp" placeholder="Digite seu Nome">
    <div class="form-group">
      <label >CPF</label>
      <input type="number" class="form-control" name="cpf" placeholder="Digite seu CPF">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

</div>


<?php include('rodape.php'); ?>
