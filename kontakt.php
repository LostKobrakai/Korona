<?php
	$h1 = "Kontakt";
	$breadcrumb = array("Home" => "index.php",
											"Kontakt" => "kontakt.php");
	include("header.php");
?>
	<div class="content grid">
		<div class="block b-kontakt grid__item one-whole bp-med--one-third">
			<h2 class="headline">
				Korona Leuchten GmbH
			</h2>
			<div class="b-text">
				<div class="vcard">
					<div class="org is-vishidden">Korona Leuchten GmbH</div>
					<div class="adr">
					 <div class="street-address">Lindauer Straße 25a</div>
					 <span class="postal-code">86199</span>
					 <span class="locality">Augsburg</span>
					</div>
					<br>
					<div class="email">info@korona-licht.de</div>
					<div class="tel">
						<span class="type is-vishidden">Work</span>
						T <span class="value">+49</span><span class="value">821</span><span class="value">90628-0</span>
					</div>
					<div class="tel">
						<span class="type is-vishidden">Fax</span>
						F <span class="value">+49</span><span class="value">821</span><span class="value">90628-12</span>
					</div>
					<br>
					<div>
						Ansprechpartner:
						<span class="fn" style="font-weight: normal">Stephan Meyer</span>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	include("footer.php");
?>