<?php
	$h1 = "Downloads";
	$breadcrumb = array("Home" => "index.php",
											"Downloads" => "downloads.php");
	include("header.php");
?>
	<div class="content downloads grid">
		<div class="accordion grid__item">
			<ul>
				<li>
					<h2 class="headline">
						<a class="acc-handle">kor_#01</a>
					</h2>
					<div class="acc-panel grid">
						<div>
							<div class="grid__item one-whole bp-small-2--one-half bp-large--one-third push--bp-large--one-third">
								<h3>Downloads</h3>
								<div class="b-text">
									<table>
										<tr>
											<td>Infobrochüre:</td>
											<td><a class="noarr" href="#">PDF</a></td>
										</tr>
										<tr>
											<td>Sicherheitshinweise:</td>
											<td><a class="noarr" href="#">PDF</a></td>
										</tr>
										<tr>
											<td>Montageanleitung:</td>
											<td><a class="noarr" href="#">PDF</a></td>
										</tr>
										<tr>
											<td>Lichtberechnung:</td>
											<td><a class="d-handle">EXL</a></td>
										</tr>
									</table>
								</div>
							</div><!--
							--><div class="grid__item one-whole bp-small-2--one-half bp-large--one-third push--bp-large--one-third">
								<p>Rem blanditiis quidem molestiae vitae eveniet voluptatibus eaque vero sed molestias ad nemo veniam aperiam eos aliquid suscipit esse quibusdam maiores consequuntur delectus ab quaerat ratione repudiandae aspernatur voluptates eligendi.<br>
								<a href="produkte_kor_01.php" title="Zu kor_#01" class="right">Zum Produkt</a></p>
							</div>
						</div>
						<div class="d-form grid__item one-whole bp-large--two-thirds push--bp-large--one-third">
							<hr>
								<form class="download-form grid grid--wide" action="mail.php" method="post">
									<fieldset class="grid__item one-whole bp-med--one-half">
										<div class="field-container">
											<label for="d-name" class="is-vishidden">Name <abbr title="Required">*</abbr></label>
											<input id="d-name" name="d-name" type="text" placeholder="Name *">
										</div>
										<div class="field-container">
											<label for="d-email" class="is-vishidden">Email <abbr title="Required">*</abbr></label>
											<input id="d-email" name="d-email" type="email" placeholder="Email *">
										</div>
										<div class="field-container">
											<label for="d-telefon" class="is-vishidden">Telefon <abbr title="Required">*</abbr></label>
											<input id="d-telephone" name="d-telephone" type="tel" placeholder="Telefon *">
										</div>
									</fieldset><!--
									 --><fieldset class="grid__item one-whole bp-med--one-half">
										<div class="field-container">
											<label for="d-company" class="is-vishidden">Firma <abbr title="Required">*</abbr></label>
											<input id="d-company" name="d-company" type="text" placeholder="Firma *">
										</div>
										<div class="field-container">
											<label for="d-street" class="is-vishidden">Straße, Hausnummer</label>
											<input id="d-street" name="d-street" type="text" placeholder="Straße, Hausnummer">
										</div>
										<div class="field-container">
											<label for="d-city" class="is-vishidden">PLZ, Stadt</label>
											<input id="d-city" name="d-city" type="text" placeholder="PLZ, Stadt">
										</div>
									</fieldset><!--
									 --><fieldset class="grid__item one-whole">
										<div class="field-container grid">
											<legend class="grid__item one-whole">Fachbereich <abbr title="Required">*</abbr></legend>
								      <label for="checkbox1" class="grid__item one-half bp-med--one-third"><input id="checkbox1" name="checkbox[]" type="checkbox"> Architekt</label><!--
								   --><label for="checkbox2" class="grid__item one-half bp-med--one-third"><input id="checkbox2" name="checkbox[]" type="checkbox"> Lichtplanung</label><!--
								   --><label for="checkbox3" class="grid__item one-half bp-med--one-third"><input id="checkbox3" name="checkbox[]" type="checkbox"> Innenausbau</label><!--
								   --><label for="checkbox4" class="grid__item one-half bp-med--one-third"><input id="checkbox4" name="checkbox[]" type="checkbox"> Handel</label><!--
								   --><label for="checkbox5" class="grid__item one-half bp-med--one-third"><input id="checkbox5" name="checkbox[]" type="checkbox"> Bauherr</label><!--
								   --><label for="checkbox6" class="grid__item one-half bp-med--one-third"><input id="checkbox6" name="checkbox[]" type="checkbox"> Sonstiger</label>
										</div>
									<div class="field-container grid">
										<input id="d-file" name="d-file" type="hidden" value="test.pdf">
										<div class="grid__item one-whole bp-small-2--one-half">
											<input id="d-submit" name="d-submit" type="submit" value="Absenden" />
										</div><!--
										 --><div class="d-handle grid__item one-whole bp-small-2--one-half">
										 	<button type="button" class="alt align-right">Formular Schließen</button>
										</div>
									</div>
								</fieldset>
							</form>
							<hr>
						</div>
					</div>
				<li>
					<h2 class="headline">
						<a class="acc-handle">kor_#02</a>
					</h2>
					<div class="acc-panel grid">
						<div class="text grid__item one-whole bp-small-2--one-half bp-large--two-thirds grid"><p class="grid__item one-whole bp-large--one-half">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore quis iure mollitia est error delectus laborum numquam. Dolorum consequatur placeat id commodi perspiciatis excepturi fugit magnam tempora facilis quo.</p><!--
						--><p class="grid__item one-whole bp-large--one-half">Rem blanditiis quidem molestiae vitae eveniet voluptatibus eaque vero sed molestias ad nemo veniam aperiam eos aliquid suscipit esse quibusdam maiores consequuntur delectus ab quaerat ratione repudiandae aspernatur voluptates eligendi.</p></div><!--
				 --><div class="grid__item one-whole bp-small-2--one-half bp-large--one-third">
				 <img src="images/produkte_kor_01/vouten.jpg" alt="Image"></div>
					</div>
				<li>
					<h2 class="headline">
						<a class="acc-handle">kor_#03</a>
					</h2>
					<div class="acc-panel grid">
						<div class="text grid__item one-whole bp-small-2--one-half bp-large--two-thirds grid"><p class="grid__item one-whole bp-large--one-half">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore quis iure mollitia est error delectus laborum numquam. Dolorum consequatur placeat id commodi perspiciatis excepturi fugit magnam tempora facilis quo.</p><!--
						--><p class="grid__item one-whole bp-large--one-half">Rem blanditiis quidem molestiae vitae eveniet voluptatibus eaque vero sed molestias ad nemo veniam aperiam eos aliquid suscipit esse quibusdam maiores consequuntur delectus ab quaerat ratione repudiandae aspernatur voluptates eligendi.</p></div><!--
				 --><div class="grid__item one-whole bp-small-2--one-half bp-large--one-third">
				 <img src="images/produkte_kor_01/vouten.jpg" alt="Image"></div>
					</div>
				<li>
					<h2 class="headline">
						<a class="acc-handle">kor_#04</a>
					</h2>
					<div class="acc-panel grid">
						<div class="text grid__item one-whole bp-small-2--one-half bp-large--two-thirds grid"><p class="grid__item one-whole bp-large--one-half">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore quis iure mollitia est error delectus laborum numquam. Dolorum consequatur placeat id commodi perspiciatis excepturi fugit magnam tempora facilis quo.</p><!--
						--><p class="grid__item one-whole bp-large--one-half">Rem blanditiis quidem molestiae vitae eveniet voluptatibus eaque vero sed molestias ad nemo veniam aperiam eos aliquid suscipit esse quibusdam maiores consequuntur delectus ab quaerat ratione repudiandae aspernatur voluptates eligendi.</p></div><!--
				 --><div class="grid__item one-whole bp-small-2--one-half bp-large--one-third">
				 <img src="images/produkte_kor_01/vouten.jpg" alt="Image"></div>
					</div>
				<li>
					<h2 class="headline">
						<a class="acc-handle">kor_#05</a>
					</h2>
					<div class="acc-panel grid">
						<div class="text grid__item one-whole bp-small-2--one-half bp-large--two-thirds grid"><p class="grid__item one-whole bp-large--one-half">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore quis iure mollitia est error delectus laborum numquam. Dolorum consequatur placeat id commodi perspiciatis excepturi fugit magnam tempora facilis quo.</p><!--
						--><p class="grid__item one-whole bp-large--one-half">Rem blanditiis quidem molestiae vitae eveniet voluptatibus eaque vero sed molestias ad nemo veniam aperiam eos aliquid suscipit esse quibusdam maiores consequuntur delectus ab quaerat ratione repudiandae aspernatur voluptates eligendi.</p></div><!--
				 --><div class="grid__item one-whole bp-small-2--one-half bp-large--one-third">
				 <img src="images/produkte_kor_01/vouten.jpg" alt="Image"></div>
					</div>
				<li>
					<h2 class="headline">
						<a class="acc-handle">kor_#06</a>
					</h2>
					<div class="acc-panel grid">
						<div class="text grid__item one-whole bp-small-2--one-half bp-large--two-thirds grid"><p class="grid__item one-whole bp-large--one-half">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed dolore quis iure mollitia est error delectus laborum numquam. Dolorum consequatur placeat id commodi perspiciatis excepturi fugit magnam tempora facilis quo.</p><!--
						--><p class="grid__item one-whole bp-large--one-half">Rem blanditiis quidem molestiae vitae eveniet voluptatibus eaque vero sed molestias ad nemo veniam aperiam eos aliquid suscipit esse quibusdam maiores consequuntur delectus ab quaerat ratione repudiandae aspernatur voluptates eligendi.</p></div><!--
				 --><div class="grid__item one-whole bp-small-2--one-half bp-large--one-third">
				 <img src="images/produkte_kor_01/vouten.jpg" alt="Image"></div>
					</div>
			</ul>
		</div>
	</div>

<?php
	include("footer.php");
?>