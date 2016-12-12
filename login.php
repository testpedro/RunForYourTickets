<?php
$header_title="Login";
$header_css='<link rel="stylesheet" href="./CSS/login.css">';
$nav1="Eventos";
$nav2="Cadastre-se";
$nav3="Quem somos";
include("header.php");
?>
	<div class="login">
		<form name="login" action="profile.php" method="POST">
			<h1 class="login-title">Login</h1>
		  <input type="text" class="login-input" placeholder="Email Adress" autofocus>
	    <input type="password" class="login-input" placeholder="Password">
	    <input type="submit" value="Run!" class="login-button">
			<p class="login-lost"><a href="">Forgot Password?</a></p>
		</form>

	</div>
