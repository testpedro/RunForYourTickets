<?php
$header_title="Cadastro";
$header_css='<link rel="stylesheet" href="./CSS/login.css">';
$nav1="Eventos";
$nav2="Login";
$nav3="Quem somos";
include("header.php");
?>


<div class="login">
  <form name="register" action="profile.php" method="POST">
    <h1 class="login-title">Cadastre-se</h1>
    <input type="text" class="login-input" name="user" maxlength="35" placeholder=" Ex: Tyrion Lannister" required autofocus>
    <input type="text" class="login-input" name="reglname" maxlength="35" placeholder=" Ex: tyrion@got.com" required>
    <input type="text" class="login-input" name="regcity" maxlength="50" placeholder=" Ex: King's Landing"required>
    <input type="password" class="login-input" name="regpasswd" maxlength="32" placeholder=" *******"required>
    <input type="password" class="login-input" placeholder="Password">
    <input type="submit" value="Cadastrar" class="login-button">
  </form>
</div>
