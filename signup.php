<?php

session_start();
$con = pg_connect("host=localhost port=5432 dbname=runteste user=postgres password=postgres");
if(!$con){
  echo "<br>Erro ao conectar a base de dados!";
}
/*eu poderia tratar isso como um array mas deus no comando*/
if(isset($_POST["submit"])){
  $user= pg_escape_string($_POST['user']);
  $nome=pg_escape_string($_POST['nome']);
  $email=pg_escape_string($_POST['email']);
  $regpasswd=pg_escape_string($_POST['regpasswd']);
  $tel=pg_escape_string($_POST['tel']);
  $cpf= pg_escape_string($_POST['cpf']);
  $rg=pg_escape_string($_POST['rg']);
  $country=pg_escape_string($_POST['country']);
  $uf= pg_escape_string($_POST['uf']);
  $cep = pg_escape_string($_POST['cep']);
  $city = pg_escape_string($_POST['city']);
  $logr = pg_escape_string($_POST['logr']);
  $bairro = pg_escape_string($_POST['bairro']);
/*

  $user= "Master";
  $nome="Jesus Cristo";
  $email="jesus@heaven.com.br";
  $regpasswd="salmos";
  $tel="40028922";
  $cpf= "8966462";
  $rg="4444";;
  $country="seila";
  $uf= "sc";
  $cep = "28374";
  $city = "jerusalem";
  $logr ="natal";
  $bairro = "christmas";
*/

  /*queries de teste de ocorrência de email ou user*/

  $sql_email = pg_query($con, "SELECT count(*) FROM usuario WHERE uemail = '{$email}'");
  $sql_user=pg_query($con, "SELECT count(*) FROM usuario WHERE usr = '{$user}'");


  $noemail = pg_fetch_result($sql_email);
  $nouser = pg_fetch_result($sql_user);

  if($nouser || $noemail){
    if($noemail){
      echo "Email já cadastrado. Informe outro<br>";
      include('cadastro.php');
    }else if($nouser){
      echo "user já cadastrado, por favor informe outro.<br>";
      include('cadastro.php');
    }
  }else{

    /*hashing com md5 da senha para armazenar bonitinho do mesmo tamanho*/
    $paswd=md5($regpasswd);
    /*query de cadastro*/

    $esql = "INSERT INTO ender VALUES('". $cep."','".$uf."', '".$city."','". $logr."', '".$bairro."',".$nlog.",'" . $country . "');";
    //$_esql="INSERT INTO ender VALUES($cep, $uf, $city, $logr, $bairro, $nlog, $country);";
    $res = pg_query($con, $_esql);

    if(!$res){
      echo "<br>deu merda na primeira query\n";
    }


    $_usql= "INSERT INTO usuario VALUES('".$email."','".$user."','".$paswd."','".$tel."','".$cpf."','".$rg."','".$nome."','".$cep."');";
    $res2= pg_query($con, $_usql);

        if(!$res2){
          echo "<br>deu merda na segunda query\n";
        }
  }
}
pg_close($con);
include"cadastro.php";
?>
