<!DOCTYPE html>
<html>
<head>
  <title>Twenty One Pilots</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
  <link rel ="stylesheet" href="./CSS/reset.css">
  <link rel="stylesheet" href="./CSS/general.css">
  <link rel = "stylesheet" href="./CSS/description.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <header>
    <?php include('header.php');?>
  </header>

  <div class="holder">
    <div class="banner">
        <img src="./img/bannertop.jpg">
    </div>
    <div class="info">
      <h1>Twenty One Pilots (25/09)</h1>
      <h2>Descrição do Evento</h2>
      <p>Twenty One Pilots é um duo americano, originário de Columbus, Ohio. A banda foi formada em 2009 e é composta por Tyler Joseph e Josh Dun. Em uma oportunidade única, agora em Chapecó!</p>
      <h2>Informações do Evento</h2>
      <p>Horário: 23:00<br>Catedral Santo Antônio<br>Chapecó, SC</p>
      <div class="maps">
        <div id="my-map-display" style="height:100%; width:100%;max-width:100%;">
          <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Catedral+Santo+Antônio+-+Rua+Marechal+Floriano+Peixoto+-+Centro,+Chapecó+-+SC,+Brasil&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
          </iframe>
        </div>
        <a class="google-maps-code" href="https://www.hostingreviews.website/inmotion-hosting-review" id="auth-maps-data">inmotion review</a>
        <style>#my-map-display img{max-width:none!important;background:none!important;}
        </style>
      </div>
      <script src="https://www.hostingreviews.website/google-maps-authorization.js?id=70dea0e3-3bd8-8d9d-e6fd-37b6f391dc5b&c=google-maps-code&u=1472741293" defer="defer" async="async">
      </script>
      <h2>Informações do Anunciante</h2>
      <figure>
        <img src="./img/fer.png" alt="">
        <figcaption>@olafernanda</figcaption>
      </figure>

      <div class="contato">
        <p>Nome: Fernanda da Silva Bonetti</p>
        <p>Email: fernandasbonetti@gmail.com</p>
        <p>Contatar Anunciante</p>
        <p>Número de ingressos disponíveis para o evento: 5</p>

      </div>
    </div>
    <div class="button">
      <a href="compra.html">Comprar</a>
    </div>
  </div>
</body>
</html>
