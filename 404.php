<?php
	$h1 = "404";
	$hidebreadcrumb = true;
	$breadcrumb = array("Home" => "index.php");
	include("header.php");
?>
	<div class="content grid">
		<div class="block grid__item">
			<h2 class="headline">Seite nicht gefunden?</h2>
			<div class="grid">
				<div class="grid__item one-whole bp-med--one-half">
					<img src="images/404.jpg" alt="Bild aus der Serie Spongebob">
				</div><!--
				 --><div class="grid__item one-whole bp-med--one-half">
					<h3 class="headline">Suche</h3>
					<form action="#" method="post" class="inline-form search-form">
					    <fieldset class="bp-med--three-quarters">
						    <legend class="is-vishidden">Search</legend>
						    <label for="search-field" class="is-vishidden">Search</label>
						    <input placeholder="" id="search-field" class="search-field" type="search">
						    <input value="Suchen" class="search-submit" type="submit">
					    </fieldset>
					</form>
					<div class="grid">
						<div class="grid__item">
							<h3 class="headline">Schnelleinstieg</h3>
						</div>
						<div class="block grid__item one-whole bp-med--one-half">
							<h4 class="headline"><a href="produkte_kor_01.php">Produkte</a></h4>
						</div><!--
						 --><div class="block grid__item one-whole bp-med--one-half">
							<h4 class="headline"><a href="#">Referenzen</a></h4>
						</div><!--
						 --><div class="block grid__item one-whole bp-med--one-half">
							<h4 class="headline"><a href="#">Unternehmen</a></h4>
						</div><!--
						 --><div class="block grid__item one-whole bp-med--one-half">
							<h4 class="headline"><a href="#">Kontakt</a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	include("footer.php");
?>