<?php
$header_title="Evento";
$header_css='<link rel = "stylesheet" href="./CSS/description.css">';
$nav1="Home";
$nav2="Login";
$nav3="Sobre nós";
include('header.php');
?>

<div class="event-info">
  <h1><?php echo $event['evname'];?></h1>
  <div class="event-img">
    <img src="<?php echo $event['evpic']?>"/>
  </div>
  <section class="descrpt">
    <ul>
      <li>Categoria: <?php echo $event['evcat'];?></li>
      <li>Data: <?php echo $event['evdate'];?></li>
      <li>Horário: <?php echo $event['evhour'];?></li>
      <li>Endereço: <?php echo $event['evlocal'];?></li>
    </ul>
  </section>

  <section class="anunc">
    <h2>Anúncios</h2>
    <div class="pub">
      <img src="./img/people.png" alt="Usuário Sem Foto">
      <ol>
        <li>User: <?php;?></li>
        <li>Publicado em:</li>
        <li>Quantia de Tickets:</li>
        <li>Preço por Ticket:</li>
        <li>Disponibilidade de Entrega:</li>
        <li>Informações Adicionais</li>
        <input type="button" value="Comprar">
      </ol>
    </div>
  </section>


</div>
