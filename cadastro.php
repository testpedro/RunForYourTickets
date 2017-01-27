<?php
$header_title="Cadastro";
$header_css='<link rel="stylesheet" href="./CSS/cadastro.css">';
$nav1="Eventos";
$nav2="Login";
$nav3="Quem somos";
include("header.php");

?>


<div class="login">
  <form name="register" action="profile.php" method="post">
    <h1 class="login-title">Cadastre-se</h1>

    <fieldset id="first">
      <input type="text" class="login-input" name="user" maxlength="30" placeholder="Usuário. Ex: tyrionl" required >
      <input type="text" class="login-input" name="nome" maxlength="50"  placeholder=" Ex: Tyrion Lannister" required autofocus>
      <input type="text" class="login-input" name="email" maxlength="50"  placeholder=" Ex: tyrion@got.com" required>
      <input type="text" class="login-input" name="tel" maxlength="40"  placeholder="Contato" required>
      <input type="password" class="login-input" name="regpasswd" maxlength="100" placeholder="*******"required>
      <input id="next_btn1" onclick="next_step1()" type="button" value="Next" class="login-button">
    </fieldset>

    <fieldset id="second">
      <input type="text" class="login-input" name="cpf" maxlength="30" placeholder="CPF" required>
      <input type="text" class="login-input" name="rg" maxlength="10" placeholder="RG" required>
      <input type="text" class="login-input" name="country" maxlength="30"  placeholder="País" required>
      <input type="text" class="login-input" name="uf" maxlength="2" placeholder="UF" required>
      <input id="next_btn2" name="next" onclick="next_step2()" type="button" value="Next" class="login-button">
    </fieldset>

    <fieldset id="third">
      <input type="text" class="login-input" name="cep" maxlength="30" placeholder="CEP" required>
      <input type="text" class="login-input" name="city" maxlength="50" placeholder="Cidade" required>
      <input type="text" class="login-input" name="logr" maxlength="50"  placeholder="Logradouro" required>
      <input type="text" class="login-input" name="bairro" maxlength="30"  placeholder="Bairro" required>
      <input class="login-button" onclick="validation(event)" type="submit" value="Submit" >
    </fieldset>
  </form>
</div>
