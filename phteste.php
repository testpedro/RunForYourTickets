<?php
$nav1="Eventos";
$nav2="Login";
$nav3="Quem somos";
$header_title="TUAMAE";
include "phteste2.php";

$con = pg_connect("host=localhost port=5432 dbname=phteste user=postgres password=postgres");
if(!$con){
  echo "<br>Erro ao conectar a base de dados!";
}
if(isset($_POST["submit"])){
  $phname=trim($_POST['phname']);
  $phyear=trim($_POST['phyear']);

  if(!isset($phname)){
    echo "sem ph name";
  }
  $sql= pg_query($con, "INSERT INTO phuser VALUES('".$phname."', ".$phyear.");");

  if(!$sql){
    echo "<br> deu merda hein\n";
  }
}
pg_close($con);
?>
