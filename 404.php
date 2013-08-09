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
						<p>Leider ist die Seite, die sie aufgerufen haben, nichtmehr vorhanden. Vielleicht finden sie über unsere Suche zu der gewünschten Seite.</p>
					<form action="#" method="post" class="inline-form search-form">
					    <fieldset class="bp-med--three-quarters">
						    <legend class="is-vishidden">Search</legend>
						    <label for="search-field" class="is-vishidden">Search</label>
						    <input placeholder="" id="search-field" class="search-field" type="search">
						    <input value="Suchen" class="search-submit" type="submit">
					    </fieldset>
					</form>
					<div class="grid">
						<div class="block grid__item one-whole bp-med--one-half">
							<h3 class="headline"><a href="produkte_kor_01.php">Produkte</a></h3>
							<figure>
								<a class="noarr" href="#"><img src="images/produkte_uebersicht/kor01_produkt_uebersicht.jpg" alt=""></a>
							</figure>
						</div><!--
						 --><div class="block grid__item one-whole bp-med--one-half">
							<h3 class="headline"><a href="#">Referenzen</a></h3>
							<figure>
								<a class="noarr" href="#"><img src="images/produkte_uebersicht/kor02_produkt_uebersicht.jpg" alt=""></a>
							</figure>
						</div><!--
						 --><div class="block grid__item one-whole bp-med--one-half">
							<h3 class="headline"><a href="#">Unternehmen</a></h3>
							<figure>
								<a class="noarr" href="#"><img src="images/produkte_uebersicht/kor03_produkt_uebersicht.jpg" alt=""></a>
							</figure>
						</div><!--
						 --><div class="block grid__item one-whole bp-med--one-half">
							<h3 class="headline"><a href="#">Kontakt</a></h3>
							<figure>
								<a class="noarr" href="#"><img src="images/produkte_uebersicht/kor04_produkt_uebersicht.jpg" alt=""></a>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	include("footer.php");
?>