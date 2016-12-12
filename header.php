<!DOCTYPE html>
<html lang="pt">
<head>
  <title><?php print $header_title;?></title>
  <link rel="stylesheet" href="./CSS/reset.css">
  <?php @print $header_css; ?>
  <link rel="stylesheet" href="./CSS/general.css">
  <link rel="stylesheet" href="./CSS/mobile.css" media="(max-width:939px)"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!--  <script src="./js/jquery-3.1.1.js" type="text/javascript"></script>
-->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
<script>
$(function() {
  $( "#datepicker" ).datepicker();
});
</script>
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
        <li><a href="anuncie.php"><?php print $nav1;?></a></li>
        <li><a href="eventos.php"><?php print $nav2;?></a></li>
        <li><a href="sobre.php"><?php print $nav3;?></a></li>
      </ul>
    </nav>
  </header>
