<?php
$header_title="Anuncie na Run For Your Tickets";
$header_css='<link rel="stylesheet" href="./CSS/anuncie.css">';
include("header.php");
?>
<div class="anuncio">
  <h1> Criar anúncio </h1>
  <form name="anuncevent" action="description.php" method="post">
    <input type="text" name="eventname" maxlength="35" required>
    <input type="text">
  </form>
</div>
