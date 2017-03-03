<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

session_start();
include"db.php";

if(isset($_POST['user']) && ($_POST['user'] != '')){
  $user=array();
  $user['user']=trim($_POST['user']);

  if(isset($_POST['nome'])){
    $user['nome']=trim($_POST['nome']);
  }else{
    $tarefa['nome']= '';
  }

  if(isset($_POST['email'])){
    $user['email']=trim($_POST['email']);
  }else{
    $user['email']= '';
  }
  if(isset($_POST['regpasswd'])){
    $user['paswd']=md5($_POST['regpasswd']);
  }
  if(isset($_POST['tel'])){
    $user['tel']=trim($_POST['tel']);
  }else{
    $user['tel']='';
  }

  if(isset($_POST['cpf'])){
    $user['cpf']=trim($_POST['cpf']);
  }else{
    $user['cpf']='';
  }

  if(isset($_POST['rg'])){
    $user['rg']=trim($_POST['rg']);
  }else{
    $user['rg']='';
  }
  if(isset($_POST['country'])){
    $user['country']=trim($_POST['country']);
  }else{
    $user['country']='';
  }
  if(isset($_POST['uf'])){
    $user['uf']=trim($_POST['uf']);
  }else{
    $user['uf']='';
  }
  if(isset($_POST['cep'])){
    $user['cep']=trim($_POST['cep']);
  }else{
    $user['cep']='';
  }
  if(isset($_POST['city'])){
    $user['city']=trim($_POST['city']);
  }else{
    $user['city']='';
  }
  if(isset($_POST['logr'])){
    $user['logr']=trim($_POST['logr']);
  }else{
    $user['logr']='';
  }
  if(isset($_POST['nlog'])){
    $user['nlog']=trim($_POST['nlog']);
  }else{
    $user['nlog']='';
  }
  if(isset($_POST['bairro'])){
    $user['bairro']=trim($_POST['bairro']);
  }else{
    $user['bairro']='';
  }
  registerUser($con, $user);
}

include"cadastro.php";

?>
