<?php
function listaPessoa(){
  $dsn = 'mysql:dbname=banco;host=127.0.0.1';//mysql
  $user = 'root';//root
  $password = ''; //senha vazia
  try {
  $dbh = new PDO($dsn, $user, $password);
  } catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
  }
  $sql = 'SELECT * FROM pessoas ';
  foreach ($dbh->query($sql) as $row) {
      echo "<tr>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['nome']."</td>";
      echo "<td>".$row['saldo']."</td>";
      echo "<td>".$row['cpf']."</td>";
      echo "<td><a class='btn btn-secondary' href=alterar.php?id=".$row['id'].">Editar</a></td>";
      echo "<td><a class='btn btn-secondary' href=excluir.php?id=".$row['id'].">Excluir</a></td>";
      echo "</tr>";
    }
}

function inserePessoa($nome, $saldo, $cpf){

  $dsn = 'mysql:dbname=banco;host=127.0.0.1';//mysql
  $user = 'root';//root
  $password = ''; //senha vazia
  try {
  $dbh = new PDO($dsn, $user, $password);
  } catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
  }


    $sql = "INSERT INTO pessoas (nome,saldo,cpf) VALUES ('$nome', $saldo, $cpf)";

    $c = $dbh->query($sql);

    echo"<h3>Registro incluido com sucesso! </h3>";

    echo" <a href=index.php class='btn btn-primary'>Voltar</a>";

}

function depositar($id, $valor){
require 'pessoa.php';

$p = new pessoa();

$valorDepositado = $p->deposita($valor);


$dsn = 'mysql:dbname=banco;host=127.0.0.1';//mysql
$user = 'root';//root
$password = ''; //senha vazia
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

//UPDATE `table_name` SET `column_name` = `new_value' [WHERE condition];
  $sql = "UPDATE pessoas set saldo = $valorDepositado where id=$id";

  $dbh->query($sql);

  echo "<h3>Registro incluido com sucesso! </h3>";

  echo" <a href=index.php class='btn btn-primary'>Voltar</a>";

}

function excluir($id){

  $dsn = 'mysql:dbname=banco;host=127.0.0.1';//mysql
  $user = 'root';//root
  $password = ''; //senha vazia
  try {
  $dbh = new PDO($dsn, $user, $password);
  } catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
  }

  $sql = "DELETE FROM pessoas WHERE id=$id";

  $dbh->query($sql);

  echo"<h3>Registro incluido com sucesso! </h3>";

  echo" <a href=index.php class='btn btn-primary'>Voltar</a>";

}


?>
