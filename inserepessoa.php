<?php include('cabecalho.php'); ?>
<?php
require 'pessoa.php';

$p = new pessoa();


$p->setNome($_POST['nome']);
$p->setSaldo(0);
$p->setCpf($_POST['cpf']);

inserePessoa($p->getNome(), $p->getSaldo(),$p->getCpf());

 ?>

<?php include('rodape.php'); ?>
