<?php
$header_title="Anuncie na Run For Your Tickets";
$header_css='<link rel="stylesheet" href="./CSS/anuncie.css">';
include("header.php");
?>

<div class="info">
  <h1>Anunciar e comprar ingressos ficou ainda mais fácil</h1>
</div>

<div class="holder">
  <div class="login">
    <h1>Login to Run For Your Tickets</h1>
    <form name="login" action="login.php" method="POST">
      <p><label for="name">Usuário<br></label><input type="text" name="user" maxlength="35" placeholder="Email" required></p>
      <p><label for="senha">Senha<br></label><input type="password" name="logpasswd" placeholder="Senha" required></p>
      <p>Remember me<input type="checkbox" id="remember_me"></p>
      <button type="submit" value="Submit">Login</button>
    </form>
  </div>

  <div class="cadastro">
    <h1>Cadastre-se</h1>
    <form name="register">
      <p><label for="regname"> Nome<br> </label><input type="text"  name="regname" maxlength="35" placeholder=" Ex: Tyrion Lannister" required></p>
      <p><label for="reglastname">Email<br></label><input type="text" name="reglname" maxlength="35" placeholder=" Ex: tyrion@got.com" required></p>
      <p><label for="regcity"> Cidade <br></label><input type="text" name="regcity" maxlength="50" placeholder=" Ex: King's Landing"required></p>
      <p><label for="regpasswd">Senha <br></label><input type="password" name="regpasswd" maxlength="32" placeholder=" *******"required></p>
      <button type="submit" value="Submit">Login</button>
    </form>

  </div>
</body>
</html>
