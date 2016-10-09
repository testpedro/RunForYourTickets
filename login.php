<?php
$header_title="Login";
$header_css='<link rel="stylesheet" href="./CSS/login.css">';
$nav1="Eventos";
$nav2="Cadastre-se";
$nav3="Quem somos";
include("header.php");
?>

<div class="info">
	<h1>Anunciar e comprar ingressos ficou ainda mais fácil</h1>
</div>

<div class="holder">
	<div class="login">
		<h1>Login to Run For Your Tickets</h1>
		<form name="login" action="profile.php" method="POST">
			<p>Usuário<br></label><input type="text" name="user" maxlength="35" placeholder="Email" required ></p>
			<p>Senha<br></label><input type="password" name="logpasswd" placeholder="Senha" required ></p>
			<p>Remember me<input type="checkbox" id="remember_me"></p>
			<button type="submit" value="Submit">Login</button>
		</form>
		<h2>Não é cadastrado? <a href="cadastro.php">Cadastre-se</a></h2>
	</div>
</div>
