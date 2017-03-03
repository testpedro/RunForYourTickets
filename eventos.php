<?php
$header_title="Eventos";
$header_css='<link rel="stylesheet" href="./CSS/eventos.css">';
$nav1link="index.php";
$nav2link="signin.php";
$nav3link="sobre.php";
$nav1="Home";
$nav2="Login";
$nav3="Sobre Nós";
include("header.php");
?>

<div class="search-bar">
  <input type="text" class="search-name" placeholder="Procure eventos por nome" maxlength="35">

  <select name="ticket-option">
    <option value=""></option>
    <option value="shows">Shows</option>
    <option value="teatro">Teatro</option>
    <option value="jogos">Jogos</option>
    <option value="cinema">Cinema</option>
    <option value="other">Other</option>
  </select>
  <select name="place-option">
    <option value=""></option>
    <option value="shows">SC</option>
    <option value="teatro">PR</option>
    <option value="jogos">RS</option>
  </select>
  <input type="submit" value="Search!" class="search-button">
</div>

<div class="container paineis">
			<section class="painel novidades">
				<h2>Eventos em alta</h2>
				<ol>
          <?php foreach ($lista_eventos as $event): ?>
					<li>
            <!--PERDOA AS GAMBIARRA HUSDAUHUEHUAHEU-->
            <?php $url="eventdescription.php?id=".$event['evnb'];?>
						<a href=<?php echo $url?>>
							<figure>
								<img src="<?php echo $event['evpic']?>">
								<figcaption><?php echo $event['evname']?></figcaption>
							</figure>
						</a>
					</li>
        <?php endforeach; ?>
				</ol>
			</section>
		</div>
