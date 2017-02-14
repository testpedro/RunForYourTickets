<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

session_start();
include"cadastro.php";
$con = pg_connect("host=localhost port=5432 dbname=runteste user=postgres password=postgres");
if(!$con){
  echo "<br>Erro ao conectar a base de dados!";
}
/*eu poderia tratar isso como um array mas deus no comando*/
if(isset($_POST['user'])){

  $user= trim($_POST['user']);
  $nome=trim($_POST['nome']);
  $email=trim($_POST['email']);
  $regpasswd=trim($_POST['regpasswd']);
  $tel=trim($_POST['tel']);
  $cpf= trim($_POST['cpf']);
  $rg=trim($_POST['rg']);
  $country=trim($_POST['country']);
  $uf= trim($_POST['uf']);
  $cep = trim($_POST['cep']);
  $city = trim($_POST['city']);
  $logr = trim($_POST['logr']);
  $nlog=trim($_POST['nlog']);
  $bairro = trim($_POST['bairro']);

  /*queries de teste de ocorrência de email ou user*/

  $sql_email = pg_query($con, "SELECT count(*) FROM usuario WHERE uemail = '{$email}'");
  $sql_user=pg_query($con, "SELECT count(*) FROM usuario WHERE usr = '{$user}'");

  /*hashing com md5 da senha para armazenar bonitinho do mesmo tamanho no banco de dados*/
  $paswd=md5($regpasswd);


  /*query de cadastro*/
  $esql="INSERT INTO ender VALUES('{$cep}', '{$uf}', '{$city}', '{$logr}', '{$bairro}', {$nlog}, '{$country}');";

  $res = pg_query($con, $esql);

  if(!$res){
    echo "<br>deu merda na primeira query\n";
  }

  $_usql= "INSERT INTO usuario VALUES('{$email}','{$user}','{$paswd}','{$tel}','{$cpf}','{$rg}','{$nome}','{$cep}');";
  $res2= pg_query($con, $_usql);

  if(!$res2){
    echo "<br>deu merda na segunda query\n";
  }
}
pg_close($con);

?>
