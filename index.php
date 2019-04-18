<?php include('cabecalho.php'); ?>
  <body>
    </br>
  </br>
  <div class="border rounded">
    <table class="table table-striped" id="tabela-pessoas">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Saldo</th>
      <th scope="col">CPF</th>
      <th scope="col"> Alterar</th>
      <th scope="col"> Excluir </th>
      <th scope="col"> Depositar </th>
      <th scope="col"> Sacar </th>
      <th scope="col"> Transferir </th>

    </tr>
  </thead>
  <tbody>
    <?php listaPessoa(); ?>
  </tbody>
</div>
</div>
<?php include('rodape.php'); ?>
