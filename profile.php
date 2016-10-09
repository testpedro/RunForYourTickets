<?php
$header_title="Meu Perfil";
$header_css='<link rel="stylesheet" href="./CSS/profile.css">';
include("header.php");
$nav1="Logout";
?>

<div class="holder">
  <div class="panel">
    <img src="./img/fer.png">
    <p> <?php echo "@" .$_POST["user"];?></p>
    <ul>
      <li><a href="#">Meus Pedidos</a></li>
      <li><a href="#">Meus anúncios</a></li>
      <li><a href="#">Dados Cadastrais</a></li>
      <li><a href="#">Suporte ao Cliente</a></li>
    </ul>
  </div>

  <div class = "content">
    <div class="pedidos">
      <h1>Seus Pedidos</h1>
      <h2>Você não efetuou nenhum pedido.<br>

        ESSA PAGINA APENAS ESTÁ PRINTANDO O ID DO USER ABAIXO DA FOTO, <br>APENAS PRA VER SE TA FUNCIONANDO PQ NAO DECIDI O QUE MOSTRAR AQUI AINDA<h2>
      </div>
      <div class="anuncio">
        <h1>Seus Anúncios</h1>
        <h2>Você não efetuou nenhum anúncio.<h2>
        </div>
      </div>
    </div>
