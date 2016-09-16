<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Anuncie na Run For Your Tickets</title>
  <link rel ="stylesheet" href="./CSS/reset.css">
  <link rel="stylesheet" href="./CSS/general.css">
  <link rel = "stylesheet" href="./CSS/anuncie.css">
  <link rel="stylesheet" href="./CSS/mobile.css" media="(max-width:939px)"/>

  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <meta charset = "utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
</head>
<body>
  <header>
      <?php include('header.php');?>
  </header>

  <div class="info">
    <h1>Anunciar e comprar ingressos ficou ainda mais fácil</h1>
  </div>

  <div class="holder">
    <div class="login">
      <h1>Login to Run For Your Tickets</h1>
      <form name="login">
        <p><label for="name">Nome<br></label><input type="text" id= "name" maxlength="35" placeholder="Email" required></p>
        <p><label for="senha">Senha<br></label><input type="password" id="senha"  maxlength="32" placeholder="Senha" required></p>
        <p>Remember me<input type="checkbox" id="remember_me"></p>
        <div id="button">
          <a href="profile.html">Login</a>
        </div>
      </form>
    </div>

  <div class="cadastro">
    <h1>Cadastre-se</h1>
    <form name="account">
      <p><label for="name"> Nome<br> </label><input type="text" id= "name" name="nome" maxlength="35" placeholder=" Ex: Tyrion Lannister" required></p>
      <p><label for="lastname">Email<br></label><input type="text" id= "lastname" name="nome" maxlength="35" placeholder=" Ex: tyrion@got.com" required></p>
      <p><label for="city"> Cidade <br></label><input type="text" id= "city" name="nome" maxlength="50" placeholder=" Ex: King's Landing"required></p>
      <p><label for="senha">Senha <br></label><input type="password" id="senha" name="senha" maxlength="32" placeholder=" *******"required></p>
    <div id="button">
        <a href="profile.html">Run!</a>
      </div>
    </form>
  </div>
</div>
</body>
</html>
