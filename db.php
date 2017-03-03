<?php
$con = pg_connect("host=localhost port=5432 dbname=runteste user=postgres password=postgres");
if(!$con){
  echo "<br>Erro ao conectar a base de dados!";
}

function registerUser($con, $user){
  $esql="INSERT INTO ender VALUES(
    '{$user['cep']}',
    '{$user['uf']}',
    '{$user['city']}',
    '{$user['logr']}',
    '{$user['bairro']}',
    {$user['nlog']},
    '{$user['country']}'
  );";

  $res = pg_query($con, $esql);

  $_usql= "INSERT INTO usuario VALUES(
    '{$user['email']}',
    '{$user['user']}',
    '{$user['paswd']}',
    '{$user['tel']}',
    '{$user['cpf']}',
    '{$user['rg']}',
    '{$user['nome']}',
    '{$user['cep']}');";
    $res2=pg_query($con, $_usql);
}

function searchEvent($con, $id){

  $sql= 'SELECT  * FROM evnt WHERE evnb='.$id;
  $result=pg_query($con, $sql);
  return pg_fetch_assoc($result);
}

function showEvents($con){
  $query="SELECT * FROM evnt";
  $result=pg_query($con, $query);
  $lista_eventos=array();
  while($event=pg_fetch_assoc($result)){
    $lista_eventos[]=$event;
  }
  return $lista_eventos;
}

function createEvent($con, $event){
  $evnt="INSERT INTO evnt (evname, usrmail) VALUES(
    '{$event['eventname']}',
    '{$event['evhour']},
    '{$event['local']}',
    '{$event['categ']}',
    '{$event['dataevento']}',
    {$event['evnb']},
    '{$event['uemail']}'
  );";

  $insertion=pg_query($con, $evnt);
  if(!$insertion){
    echo "QUERY DO EVENTO DEU RUIM\n";
  }
}

?>
