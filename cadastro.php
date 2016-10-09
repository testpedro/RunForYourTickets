<?php
$header_title="Cadastro";
$header_css='<link rel="stylesheet" href="./CSS/login.css">';
$nav1="Eventos";
$nav2="Login";
$nav3="Quem somos";
include("header.php");
?>

<div class="holder">
  <div class="login">
    <h1>Cadastre-se</h1>
    <form name="register" action="profile.php" method="post">
      <p> Nome<br> </label><input type="text"  name="user" maxlength="35" placeholder=" Ex: Tyrion Lannister" required></p>
      <p>Email<br></label><input type="text" name="reglname" maxlength="35" placeholder=" Ex: tyrion@got.com" required></p>
      <p>Cidade <br></label><input type="text" name="regcity" maxlength="50" placeholder=" Ex: King's Landing"required></p>
      <p>Senha <br></label><input type="password" name="regpasswd" maxlength="32" placeholder=" *******"required></p>
      <button type="submit" value="Submit">Cadastrar</button>
    </form>
    <h2>Já possui conta? <a href="login.php">Login</a></h2>
  </div>
</div>
