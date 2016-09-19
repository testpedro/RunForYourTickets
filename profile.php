<?php
$header_title="Meu Perfil";
$header_css='<link rel="stylesheet" href="./CSS/index.css">';
include("header.php");
?>
  <title>Meu Perfil</title>
  <link rel ="stylesheet" href="./CSS/reset.css">
  <link rel="stylesheet" href="./CSS/general.css">
  <link rel="stylesheet" href="./CSS/profile.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <meta charset = "utf-8">
</head>
<body>
  <header>
    <?php include('header.php');?>
  </header>
  <div class="holder">
    <div class="panel">
      <img src="./img/fer.png">
      <p>@olafernanda</p>
      <ul>
        <li><a href="#">Meus Pedidos</a></li>
        <li><a href="#">Meus anúncios</a></li>
        <li><a href="compra.html">Dados Cadastrais</a></li>
        <li><a href="compra.html">Suporte ao Cliente</a></li>
      </ul>
  </div>

  <div class = "content">
    <div class="pedidos">
      <h1>Seus Pedidos</h1>
      <h2>Você não efetuou nenhum pedido.<h2>
    </div>
    <div class="anuncio">
      <h1>Seus Anúncios</h1>
      <h2>Você não efetuou nenhum anúncio.<h2>
    </div>
  </div>
</div>
</body>
</html>
