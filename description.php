<?php
$header_title="Twenty One Pilots";
$header_css='<link rel = "stylesheet" href="./CSS/description.css">';
$nav1="Home";
$nav2="Login";
$nav3="Sobre nós";
include('header.php');
?>

<div class="event-info">
  <img src="./img/ticket.jpg">
  <h1>Event Name</h1>

  <section class="descrpt">
    <ul>
      <li>Categoria:</li>
      <li>Data:</li>
      <li>Horário:</li>
      <li>Endereço:</li>
    </ul>
  </section>

  <section class="anunc">
    <h2>Anúncios</h2>
    <div class="pub">
      <img src="./img/fer.png" atl="Usuário Sem Foto">
      <ol>
        <li>User</li>
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
