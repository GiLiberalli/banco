<?php

class pessoa{

private $id;
private $nome;
private $saldo;
private $cpf;

public function __construct($id=NULL, $nome=NULL,$saldo=NULL,$cpf=NULL){

  $this->id = $id;
  $this->nome = $nome;
  $this->saldo = $saldo;
  $this->cpf = $cpf;
}

public function getId(){
  return $this->id;
}

public function setNome($nome){
  $this->nome = $nome;
}

public function getNome(){
  return $this->nome;
}

public function setSaldo($saldo){
  $this->saldo = $saldo;
}

public function getSaldo(){
  return $this->saldo;
}

public function setCpf($cpf){
  $this->cpf = $cpf;
}

public function getCpf(){
  return $this->cpf;
}

public function deposita($valor){
return $this->saldo = $this->saldo + $valor;
}

}

 ?>
