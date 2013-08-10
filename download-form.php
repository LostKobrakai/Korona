								<hr>
								<p>Wir benötigen für diesen Download einige Ihrer Daten. Diese werden natürlich vertraulich behandelt. Genauer Informationen finden Sie in unseren <a href="">Datenschutzrichtlinien</a>. Falls Sie bereits ihre Daten hinterlassen haben können Sie auch mit Ihrem persönlichen Passwort fortfahren. Das Passwort finden Sie in Ihrer Email von uns.</p>
								<form class="download-form grid grid--wide" action="mail.php" method="post">
									<fieldset class="grid__item one-whole">
										<div class="field-container grid grid--wide">
											<!-- <p class="grid__item one-whole bp-small-2--one-half">Für bereits angemeldete:</p> -->
											<div class="grid__item one-whole bp-small-2--one-half">
												<input id="d-password" name="d-password" type="password" placeholder="Pers. Passwort">
											</div><!--
											 --><div class="grid__item one-whole bp-small-2--one-half">
												<button type="submit" name="d-submit" class="align-right">Abschicken</button>
											</div>
										</div>
									</fieldset>
									<h3 class="grid__item one-whole">Neuanmeldung:</h3>
									<fieldset class="grid__item one-whole bp-small-2--one-half">
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
									 --><fieldset class="grid__item one-whole bp-small-2--one-half">
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
										<div class="field-container grid grid--wide">
											<legend class="grid__item one-whole is-vishidden">Fachbereich <abbr title="Required">*</abbr></legend>
								      <label for="checkbox1" class="grid__item one-half bp-med--one-third"><input id="checkbox1" name="checkbox[]" type="checkbox"> Architekt</label><!--
								   --><label for="checkbox2" class="grid__item one-half bp-med--one-third"><input id="checkbox2" name="checkbox[]" type="checkbox"> Lichtplanung</label><!--
								   --><label for="checkbox3" class="grid__item one-half bp-med--one-third"><input id="checkbox3" name="checkbox[]" type="checkbox"> Innenausbau</label><!--
								   --><label for="checkbox4" class="grid__item one-half bp-med--one-third"><input id="checkbox4" name="checkbox[]" type="checkbox"> Handel</label><!--
								   --><label for="checkbox5" class="grid__item one-half bp-med--one-third"><input id="checkbox5" name="checkbox[]" type="checkbox"> Bauherr</label><!--
								   --><label for="checkbox6" class="grid__item one-half bp-med--one-third"><input id="checkbox6" name="checkbox[]" type="checkbox"> Sonstiger</label>
										</div>
										<div class="grid grid--wide">
											<input id="d-file" name="d-file" type="hidden" value="<?php echo $datei; ?>">
											<div class="field-container grid__item one-whole bp-small-2--one-half">
												<input id="d-submit" name="d-submit" type="submit" value="Absenden" />
											</div><!--
											 --><div class="field-container d-handle d-handle--close grid__item one-whole bp-small-2--one-half">
											 	<button type="button" class="alt align-right">Formular Schließen</button>
											</div>
										</div>
									</fieldset>
								</form>
								<hr>