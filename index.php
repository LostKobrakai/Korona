<?php
	$h1 = "Geschäftsführung";
	$hideh1 = true;
	$hidebreadcrumb = true;
	$breadcrumb = array("Home" => "index.php");
	include("header.php");
?>
	<div class="content startseite grid">
		<div>
			<div class="block grid__item one-whole bp-large--one-third">
				<h2 class="headline">Produkte</h2>
				<p class="b-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum labore ea exercitationem tempore! Voluptas animi nobis in temporibus rerum obcaecati provident consectetur hic similique ullam. Quas neque possimus ab deleniti!</p>
			</div><!--
			 --><div class="block grid__item one-whole bp-small-2--one-half bp-large--one-third">
				<h3 class="headline"><a href="produkte.php#system">Systemprodukte</a></h3>
				<a class="noarr" href="#"><img src="images/startseite/system.jpg" alt=""></a>
			</div><!--
			 --><div class="block grid__item one-whole bp-small-2--one-half bp-large--one-third">
				<h3 class="headline"><a href="produkte.php#sonder">Sonderanfertigungen</a></h3>
				<a class="noarr" href="#"><img src="images/startseite/sonder.jpg" alt=""></a>
			</div>
		</div>
		<div>
			<div class="block grid__item one-whole bp-large--one-third">
				<h2 class="headline">Referenzen</h2>
				<p class="b-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum labore ea exercitationem tempore! Voluptas animi nobis in temporibus rerum obcaecati provident consectetur hic similique ullam. Quas neque possimus ab deleniti!</p>
			</div><!--
			 --><div class="block grid__item one-whole bp-small-2--one-half bp-large--one-third">
				<h3 class="headline"><a href="#">Außenbeleuchtung</a></h3>
				<a class="noarr" href="#"><img src="images/startseite/aussen.jpg" alt=""></a>
			</div><!--
			 --><div class="block grid__item one-whole bp-small-2--one-half bp-large--one-third">
				<h3 class="headline"><a href="#">Innenbeleuchtung</a></h3>
				<a class="noarr" href="#"><img src="images/startseite/innen.jpg" alt=""></a>
			</div>
		</div>
		<div>
			<div class="block grid__item one-whole bp-small-2--one-half bp-large--one-third push--bp-large--one-third">
				<h2 class="headline"><a href="#">Korona</a></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi asperiores cumque saepe et libero ducimus corporis modi deserunt similique quisquam ratione consequatur iste quibusdam. Sit ipsam nesciunt laborum ullam illum!</p>
			</div><!--
			 --><div class="block grid__item one-whole bp-small-2--one-half bp-large--one-third push--bp-large--one-third">
				<h2 class="headline"><a href="#">Kontakt</a></h2>
				<div class="b-text">
					<div class="vcard">
						<div class="fn">Stephan Meyer</div>
						<div class="email">info@korona-licht.de</div>
						<div class="tel">
							<span class="type is-vishidden">Work</span>
							T <span class="value">+49</span><span class="value">821</span><span class="value">90628-0</span>
						</div>
						<div class="tel">
							<span class="type is-vishidden">Fax</span>
							F <span class="value">+49</span><span class="value">821</span><span class="value">90628-12</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	include("footer.php");
?>