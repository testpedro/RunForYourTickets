<?php
$header_title="Anuncie na Run For Your Tickets";
$header_css='<link rel="stylesheet" href="./CSS/anuncie.css">';
$nav1link="signin.php";
$nav2link="signup.php";
$nav3link="sobre.php";
$nav1="Login";
$nav2="Eventos";
$nav3="Sobre Nós";
include("header.php");

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:signin.php');
}

?>

<div class="anuncie">
  <h1 class="login-title">Criar Evento</h1>

  <form method="POST">
    <input type="text" class="login-input" name="eventname" maxlength="35" placeholder="Nome do Evento" required><br>
    <input type="date" id="datepicker" name="dataevento" class="login-input" required ><br>
    <input type="text" class="login-input" name="local" required placeholder="Local"><br>
    <input type="time" name="evhour" class="login-input" required>
    <select name="ticket-option" name="categ" class="login-input">
      <option value="Escolha a Categoria"></option>
      <option value="shows">Shows</option>
      <option value="teatro">Teatro</option>
      <option value="jogos">Jogos</option>
      <option value="cinema">Cinema</option>
      <option value="other">Other</option>
    </select><br>
    <input type="submit" value="Criar Evento" class="login-button">
  </form>
</div>
