<!DOCTYPE html>
<html lang="pt">
<head>
  <title><?php print $header_title;?></title>
  <link rel="stylesheet" href="./CSS/reset.css">
  <?php @print $header_css; ?>
  <link rel="stylesheet" href="./CSS/general.css">
  <link rel="stylesheet" href="./CSS/mobile.css" media="(max-width:939px)"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
</head>
<body>
  <header>
    <div id="logo">
      <img src="./img/logobold.png" width="100" height="50" alt=""/>
    </div>
    <nav id="menu">
      <ul>
        <li><a href="anuncie.php">Login</a></li>
        <li><a href="eventos.php">Eventos</a></li>
        <li><a href="sobre.php">Sobre nós</a></li>
      </ul>
    </nav>
  </header>
