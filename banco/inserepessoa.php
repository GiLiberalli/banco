<?php include('cabecalho.php'); ?>
<?php

$nome = $_POST['nome'];
$saldo = 0;
$cpf = $_POST['cpf'];

inserePessoa($nome,$saldo,$cpf);

 ?>

<?php include('rodape.php'); ?>
