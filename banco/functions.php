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
      echo "<td><a class='btn btn-warning' href=alterar.php?id=".$row['id'].">Editar</a></td>";
      echo "<td><a class='btn btn-danger' href=excluir.php?id=".$row['id'].">Excluir</a></td>";
      echo "<td><a class='btn btn-primary' href=depositar.php?id=".$row['id'].">Depositar</a></td>";
      echo "<td><a class='btn btn-primary' href=sacar.php?id=".$row['id'].">Sacar</a></td>";
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

    echo" <a href=index.php class='btn btn-primary'>Voltar </a>";

}

function depositar($cpf){
  console.log("olá mundo ");
}

?>
