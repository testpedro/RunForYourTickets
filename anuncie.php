<?php
$header_title="Anuncie na Run For Your Tickets";
$header_css='<link rel="stylesheet" href="./CSS/anuncie.css">';
$nav1="Login";
$nav2="Eventos";
$nav3="Sobre Nós";
include("header.php");
?>


<div class="anuncie">
  <h1 class="login-title">Criar Evento</h1>

  <form action="#" method="post">
    <input type="text" class="login-input" name="event-name" maxlength="35" placeholder="Nome do Evento" required><br>
    <input type="date" id="datepicker" class="login-input" required ><br>

    <input type="text" class="login-input" required placeholder="Local"><br>
    <select name="ticket-option" class="login-input">
      <option value=""></option>
      <option value="shows">Shows</option>
      <option value="teatro">Teatro</option>
      <option value="jogos">Jogos</option>
      <option value="cinema">Cinema</option>
      <option value="other">Other</option>
    </select><br>
  
    <input type="submit" value="Criar Evento" class="login-button">
  </form>
</div>
