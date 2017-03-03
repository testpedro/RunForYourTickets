<?php
$header_title="Meu Perfil";
$header_css='<link rel="stylesheet" href="./CSS/profile.css">';
$nav1link="showevents.php";
$nav2link="sobre.php";
$nav3link="index.php";
$nav1="Eventos";
$nav2="Sobre nós";
$nav3="Logout";
include("header.php");


session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:login.php');
}
$logado = $_SESSION['login'];
?>

?>

<div class="side-bar">
  <div class="user-info">
    <img src="./img/people.png">
    <legend>  Olá, <?php echo $logado ?></legend>
  </div>
  <div class="nav-user">
    <ul>
      <li><a href="">Criar Anúncio</a></li>
      <li><a href="anuncie.php">Criar Evento</a></li>
      <li><a href="#">Meus Pedidos</a></li>
      <li><a href="#">Suporte ao Cliente</a></li>
    </ul>
  </div>
</div>

<div class "content">


</div>
